<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [

        'company_id',

        'person_type',

        'name',
        'trade_name',

        'document',

        'state_registration',
        'municipal_registration',

        'email',

        'phone',
        'mobile',

        'zip_code',

        'address',
        'number',
        'complement',

        'district',
        'city',
        'state',

        'credit_limit',

        'notes',

        'active',

    ];


    protected $casts = [

        'credit_limit' => 'decimal:2',

        'active' => 'boolean',

    ];


    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }


    public function getDocumentFormattedAttribute(): string
    {
        if ($this->person_type === 'F') {

            return preg_replace(
                '/(\d{3})(\d{3})(\d{3})(\d{2})/',
                '$1.$2.$3-$4',
                $this->document
            );

        }

        return preg_replace(
            '/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/',
            '$1.$2.$3/$4-$5',
            $this->document
        );
    }
}