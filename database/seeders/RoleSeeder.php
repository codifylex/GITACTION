<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::firstOrCreate([
            'name' => 'Administrador',
            'guard_name' => 'web',
        ]);

        Role::firstOrCreate([
            'name' => 'Gerente',
            'guard_name' => 'web',
        ]);

        Role::firstOrCreate([
            'name' => 'Vendedor',
            'guard_name' => 'web',
        ]);

        Role::firstOrCreate([
            'name' => 'Caixa',
            'guard_name' => 'web',
        ]);

        Role::firstOrCreate([
            'name' => 'Estoquista',
            'guard_name' => 'web',
        ]);
    }
}