<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Récupérer tous les produits actifs avec pagination
     */
    public function index(Request $request): JsonResponse
    {
        $query = Product::active()->with('category:id,name');

        // Filtrage par catégorie
        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Recherche
        if ($request->has('search') && !empty($request->search)) {
            $query->search($request->search);
        }

        $products = $query->paginate($request->get('per_page', 12));

        return response()->json([
            'success' => true,
            'data' => $products,
        ]);
    }

    /**
     * Récupérer un produit spécifique
     */
    public function show(Product $product): JsonResponse
    {        if (!$product->is_active) {
            return response()->json([
                'success' => false,
                'message' => 'Product not available',
            ], 404);
        }

        $product->load('category:id,name');

        return response()->json([
            'success' => true,
            'data' => $product,
        ]);
    }

    /**
     * Rechercher des produits
     */
    public function search(Request $request): JsonResponse
    {
        $request->validate([
            'q' => 'required|string|min:2',
        ]);

        $products = Product::active()
            ->with('category:id,name')
            ->search($request->q)
            ->paginate(12);

        return response()->json([
            'success' => true,
            'data' => $products,
        ]);
    }
}
