<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'product_id',
        'quantity',
        'extras',
        'unit_price',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'unit_price' => 'decimal:2',
        'extras' => 'array',
    ];

    /**
     * Relation avec le produit
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Scope pour filtrer par session
     */
    public function scopeBySession(Builder $query, string $sessionId): Builder
    {
        return $query->where('session_id', $sessionId);
    }

    /**
     * Accesseur pour le sous-total
     */
    public function getSubtotalAttribute(): float
    {
        return $this->quantity * $this->unit_price;
    }

    /**
     * Accesseur pour le sous-total formaté
     */
    public function getFormattedSubtotalAttribute(): string
    {
        return '$' . number_format($this->subtotal, 2);
    }
}
