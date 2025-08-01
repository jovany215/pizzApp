<?php

namespace App\Services;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Collection;

class CartService
{
    private const TAX_RATE = 0.10; // 10% de taxes

    /**
     * Récupérer le contenu du panier par cart_id
     */
    public function getCart(string $cartId): Collection
    {
        return CartItem::where('session_id', $cartId)
            ->with('product:id,name,image,price')
            ->get();
    }

    /**
     * Ajouter un produit au panier
     */
    public function addToCart(string $cartId, int $productId, int $quantity, ?array $extras = null): CartItem
    {
        $product = Product::findOrFail($productId);
        
        if (!$product->is_active) {
            throw new \Exception('Product not available');
        }

        // Vérifier si le produit existe déjà dans le panier
        $existingItem = CartItem::where('session_id', $cartId)
            ->where('product_id', $productId)
            ->first();

        if ($existingItem) {
            // Mettre à jour la quantité
            $existingItem->update([
                'quantity' => $existingItem->quantity + $quantity,
                'unit_price' => $product->price,
            ]);
            return $existingItem->fresh('product');
        }

        // Créer un nouvel élément
        return CartItem::create([
            'session_id' => $cartId,
            'product_id' => $productId,
            'quantity' => $quantity,
            'extras' => $extras,
            'unit_price' => $product->price,
        ])->load('product');
    }

    /**
     * Mettre à jour la quantité d'un élément du panier
     */
    public function updateCartItem(string $cartId, int $cartItemId, int $quantity): CartItem
    {
        $cartItem = CartItem::where('session_id', $cartId)
            ->where('id', $cartItemId)
            ->firstOrFail();

        $cartItem->update(['quantity' => $quantity]);
        
        return $cartItem->fresh('product');
    }

    /**
     * Supprimer un élément du panier
     */
    public function removeFromCart(string $cartId, int $cartItemId): bool
    {
        return CartItem::where('session_id', $cartId)
            ->where('id', $cartItemId)
            ->delete() > 0;
    }

    /**
     * Vider le panier
     */
    public function clearCart(string $cartId): bool
    {
        return CartItem::where('session_id', $cartId)->delete() > 0;
    }

    /**
     * Calculer le résumé du panier
     */
    public function getCartSummary(string $cartId): array
    {
        $cartItems = $this->getCart($cartId);
        
        $subtotal = $cartItems->sum(function ($item) {
            return $item->quantity * $item->unit_price;
        });
        
        $tax = $subtotal * self::TAX_RATE;
        $total = $subtotal + $tax;
        $itemCount = $cartItems->sum('quantity');

        return [
            'item_count' => $itemCount,
            'subtotal' => round($subtotal, 2),
            'tax' => round($tax, 2),
            'total' => round($total, 2),
            'formatted_subtotal' => '$' . number_format($subtotal, 2),
            'formatted_tax' => '$' . number_format($tax, 2),
            'formatted_total' => '$' . number_format($total, 2),
        ];
    }
}
