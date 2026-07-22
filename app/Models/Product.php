<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'company_id',

        'category_id',
        'brand_id',
        'unit_id',

        'code',
        'sku',
        'barcode',

        'name',
        'slug',
        'description',

        'type',

        'ncm',
        'cest',
        'cfop',
        'origin',
        'cst_icms',
        'csosn',

        'stock_control',
        'allow_negative_stock',

        'minimum_stock',
        'maximum_stock',

        'location',

        'batch_control',
        'expiration_control',

        'gross_weight',
        'net_weight',

        'height',
        'width',
        'length',

        'cost_price',
        'sale_price',
        'promotional_price',
        'profit_margin',

        'featured',
        'active',
    ];

    protected $casts = [
        'cost_price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'minimum_stock' => 'decimal:3',
        'maximum_stock' => 'decimal:3',
        'active' => 'boolean',
        'featured' => 'boolean',
        'stock_control' => 'boolean',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function movements(): HasMany
    {
        return $this->hasMany(StockMovement::class);
    }

    public static function generateCode(int $companyId): string
    {
        $lastProduct = self::where('company_id', $companyId)
            ->latest('id')
            ->first();

        if (!$lastProduct) {
            return 'PROD-000001';
        }

        $number = intval(str_replace('PROD-', '', $lastProduct->code));

        return 'PROD-' . str_pad($number + 1, 6, '0', STR_PAD_LEFT);
    }
}
