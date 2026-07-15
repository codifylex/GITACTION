<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $company = Company::first();

        $user = User::firstOrCreate(
            [
                'email' => 'admin@erp.com'
            ],
            [
                'company_id' => $company->id,
                'name' => 'Administrador',
                'password' => '123456',
                'active' => true,
            ]
        );

        $user->assignRole('Administrador');
    }
}