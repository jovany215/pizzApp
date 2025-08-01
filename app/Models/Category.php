<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
    ];

    /**
     * Relation avec les produits
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Récupérer les produits actifs de la catégorie
     */
    public function activeProducts(): HasMany
    {
        return $this->products()->where('is_active', true);
    }
}
