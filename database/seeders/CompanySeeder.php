<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::firstOrCreate(
            [
                'document' => '00.000.000/0001-00',
            ],
            [
                'corporate_name' => 'Gilberto Empresa',
                'trade_name' => 'Empresa Exemplo',
                'state_registration' => 'ISENTO',
                'municipal_registration' => null,
                'email' => 'contato@empresa.com',
                'phone' => '(81) 99999-9999',
                'zip_code' => '50000-000',
                'address' => 'Rua Exemplo',
                'number' => '100',
                'complement' => null,
                'district' => 'Centro',
                'city' => 'Recife',
                'state' => 'PE',
                'active' => true,
            ]
        );
    }
}