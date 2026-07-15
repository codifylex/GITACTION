<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'warehouse_id',
        'product_id',
        'quantity',
        'minimum_quantity',
        'maximum_quantity',
    ];

    protected $casts = [
        'quantity' => 'decimal:3',
        'minimum_quantity' => 'decimal:3',
        'maximum_quantity' => 'decimal:3',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    */

    public function isLowStock(): bool
    {
        return $this->quantity <= $this->minimum_quantity;
    }

    public function isOverStock(): bool
    {
        return $this->maximum_quantity > 0 &&
            $this->quantity >= $this->maximum_quantity;
    }

    public function hasStock(float $quantity): bool
    {
        return $this->quantity >= $quantity;
    }
}