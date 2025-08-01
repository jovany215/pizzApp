<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\UpdateCartItemRequest;
use App\Services\CartService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SimpleCartController extends Controller
{
    public function __construct(
        private CartService $cartService
    ) {}

    /**
     * Récupérer le contenu du panier
     */
    public function index(Request $request): JsonResponse
    {
        $request->validate(['cart_id' => 'required|string']);
        
        $cartItems = $this->cartService->getCart($request->cart_id);
        $summary = $this->cartService->getCartSummary($request->cart_id);

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
        $request->validate(['cart_id' => 'required|string']);
        
        try {
            $cartItem = $this->cartService->addToCart(
                $request->cart_id,
                $request->product_id,
                $request->quantity,
                $request->extras
            );

            return response()->json([
                'success' => true,
                'message' => 'Product added to cart successfully',
                'data' => $cartItem,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Mettre à jour la quantité d'un élément du panier
     */
    public function update(UpdateCartItemRequest $request, int $cartItemId): JsonResponse
    {
        $request->validate(['cart_id' => 'required|string']);
        
        try {
            $cartItem = $this->cartService->updateCartItem(
                $request->cart_id,
                $cartItemId,
                $request->quantity
            );

            return response()->json([
                'success' => true,
                'message' => 'Cart item updated successfully',
                'data' => $cartItem,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Supprimer un élément du panier
     */
    public function remove(Request $request, int $cartItemId): JsonResponse
    {
        $request->validate(['cart_id' => 'required|string']);
        
        $removed = $this->cartService->removeFromCart($request->cart_id, $cartItemId);

        if ($removed) {
            return response()->json([
                'success' => true,
                'message' => 'Item removed from cart successfully',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Item not found',
        ], 404);
    }

    /**
     * Vider le panier
     */
    public function clear(Request $request): JsonResponse
    {
        $request->validate(['cart_id' => 'required|string']);
        
        $this->cartService->clearCart($request->cart_id);

        return response()->json([
            'success' => true,
            'message' => 'Cart cleared successfully',
        ]);
    }

    /**
     * Récupérer le total du panier
     */
    public function getTotal(Request $request): JsonResponse
    {
        $request->validate(['cart_id' => 'required|string']);
        
        $summary = $this->cartService->getCartSummary($request->cart_id);

        return response()->json([
            'success' => true,
            'data' => $summary,
        ]);
    }
}
