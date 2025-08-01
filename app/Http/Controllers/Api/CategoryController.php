<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    /**
     * Récupérer toutes les catégories avec leurs produits actifs
     */
    public function index(): JsonResponse
    {
        $categories = Category::with(['activeProducts' => function ($query) {
            $query->select('id', 'name', 'price', 'image', 'category_id');
        }])->get();

        return response()->json([
            'success' => true,
            'data' => $categories,
        ]);
    }

    /**
     * Récupérer une catégorie spécifique avec ses produits
     */
    public function show(Category $category): JsonResponse
    {
        $category->load(['activeProducts' => function ($query) {
            $query->select('id', 'name', 'price', 'image', 'description', 'category_id');
        }]);

        return response()->json([
            'success' => true,
            'data' => $category,
        ]);
    }
}
