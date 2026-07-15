<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'sale_id',
        'client_id',
        'number',
        'series',
        'type',
        'status',
        'access_key',
        'protocol',
        'xml_path',
        'pdf_path',
        'issued_at',
        'total_products',
        'discount',
        'freight',
        'other_expenses',
        'total_invoice',
    ];

    protected $casts = [
        'issued_at' => 'datetime',
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

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}