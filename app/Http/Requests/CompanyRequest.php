<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'corporate_name' => ['required','string','max:255'],
            'trade_name' => ['required','string','max:255'],

            'document' => ['required','string','max:18'],

            'state_registration' => ['nullable','string','max:30'],
            'municipal_registration' => ['nullable','string','max:30'],

            'tax_regime' => ['nullable','string','max:50'],

            'email' => ['nullable','email'],

            'phone' => ['nullable','string'],

            'zipcode' => ['nullable','string'],

            'address' => ['nullable','string'],

            'number' => ['nullable','string'],

            'district' => ['nullable','string'],

            'city' => ['nullable','string'],

            'state' => ['nullable','string','size:2'],

            'logo' => ['nullable','string']
        ];
    }
}