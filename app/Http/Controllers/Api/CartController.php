<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\UpdateCartItemRequest;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CartController extends Controller
{
    private const TAX_RATE = 0.10; // 10% de taxes

    /**
     * Récupérer le contenu du panier
     */
    public function index(Request $request): JsonResponse
    {
        $sessionId = $request->session()->getId();
        
        $cartItems = CartItem::bySession($sessionId)
            ->with('product:id,name,image')
            ->get();

        $summary = $this->getCartSummary($cartItems);

        return response()->json([
            'success' => true,
            'data' => [
                'items' => $cartItems,
                'summary' => $summary,
            ],
        ]);
    }

    /**
     * Ajouter un produit au panier
     */
    public function add(AddToCartRequest $request): JsonResponse
    {
        $product = Product::findOrFail($request->product_id);
        
        if (!$product->is_active) {
            throw ValidationException::withMessages([
                'product_id' => 'This product is not available.',
            ]);
        }

        $sessionId = $request->session()->getId();

        // Vérifier si le produit existe déjà dans le panier
        $existingItem = CartItem::bySession($sessionId)
            ->where('product_id', $request->product_id)
            ->first();

        if ($existingItem) {
            // Mettre à jour la quantité
            $existingItem->update([
                'quantity' => $existingItem->quantity + $request->quantity,
                'unit_price' => $product->price,
            ]);
            $cartItem = $existingItem;
        } else {
            // Créer un nouvel élément
            $cartItem = CartItem::create([
                'session_id' => $sessionId,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'extras' => $request->extras ?? null,
                'unit_price' => $product->price,
            ]);
        }

        $cartItem->load('product:id,name,image');

        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully',
            'data' => $cartItem,
        ], 201);
    }

    /**
     * Mettre à jour la quantité d'un élément du panier
     */
    public function update(UpdateCartItemRequest $request, CartItem $cartItem): JsonResponse
    {
        // Vérifier que l'élément appartient à la session courante
        if ($cartItem->session_id !== $request->session()->getId()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 403);
        }

        $cartItem->update([
            'quantity' => $request->quantity,
        ]);

        $cartItem->load('product:id,name,image');

        return response()->json([
            'success' => true,
            'message' => 'Cart item updated successfully',
            'data' => $cartItem,
        ]);
    }

    /**
     * Supprimer un élément du panier
     */
    public function remove(Request $request, CartItem $cartItem): JsonResponse
    {
        // Vérifier que l'élément appartient à la session courante
        if ($cartItem->session_id !== $request->session()->getId()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 403);
        }

        $cartItem->delete();

        return response()->json([
            'success' => true,
            'message' => 'Item removed from cart successfully',
        ]);
    }

    /**
     * Vider le panier
     */
    public function clear(Request $request): JsonResponse
    {
        $sessionId = $request->session()->getId();
        
        CartItem::bySession($sessionId)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Cart cleared successfully',
        ]);
    }

    /**
     * Récupérer le total du panier
     */    public function getTotal(Request $request): JsonResponse
    {
        $sessionId = $request->session()->getId();
        
        $cartItems = CartItem::bySession($sessionId)->get();
        $summary = $this->getCartSummary($cartItems);

        return response()->json([
            'success' => true,
            'data' => $summary,
        ]);
    }

    /**
     * Calculer le résumé du panier
     */
    private function getCartSummary($cartItems): array
    {
        $subtotal = $cartItems->sum('subtotal');
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
