<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'type',
        'installments',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
        'installments' => 'boolean',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function salePayments()
    {
        return $this->hasMany(SalePayment::class);
    }

    public function purchasePayments()
    {
        return $this->hasMany(PurchasePayment::class);
    }

    public function accountsReceivable()
    {
        return $this->hasMany(AccountReceivable::class);
    }

    public function accountsPayable()
    {
        return $this->hasMany(AccountPayable::class);
    }
}