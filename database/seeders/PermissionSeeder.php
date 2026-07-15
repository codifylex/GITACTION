<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [

            /*
            |--------------------------------------------------------------------------
            | Empresa
            |--------------------------------------------------------------------------
            */

            'companies.view',
            'companies.create',
            'companies.update',
            'companies.delete',

            /*
            |--------------------------------------------------------------------------
            | Usuários
            |--------------------------------------------------------------------------
            */

            'users.view',
            'users.create',
            'users.update',
            'users.delete',

            /*
            |--------------------------------------------------------------------------
            | Categorias
            |--------------------------------------------------------------------------
            */

            'category.view',
            'category.create',
            'category.update',
            'category.delete',
            'category.restore',
            'category.force-delete',

            /*
            |--------------------------------------------------------------------------
            | Marcas
            |--------------------------------------------------------------------------
            */

            'brand.view',
            'brand.create',
            'brand.update',
            'brand.delete',

            /*
            |--------------------------------------------------------------------------
            | Unidades
            |--------------------------------------------------------------------------
            */

            'unit.view',
            'unit.create',
            'unit.update',
            'unit.delete',

            /*
            |--------------------------------------------------------------------------
            | Produtos
            |--------------------------------------------------------------------------
            */

            'products.view',
            'products.create',
            'products.update',
            'products.delete',

            /*
            |--------------------------------------------------------------------------
            | Clientes
            |--------------------------------------------------------------------------
            */

            'clients.view',
            'clients.create',
            'clients.update',
            'clients.delete',

            /*
            |--------------------------------------------------------------------------
            | Fornecedores
            |--------------------------------------------------------------------------
            */

            'suppliers.view',
            'suppliers.create',
            'suppliers.update',
            'suppliers.delete',

            /*
            |--------------------------------------------------------------------------
            | Compras
            |--------------------------------------------------------------------------
            */

            'purchases.view',
            'purchases.create',
            'purchases.update',
            'purchases.delete',

            /*
            |--------------------------------------------------------------------------
            | Vendas
            |--------------------------------------------------------------------------
            */

            'sales.view',
            'sales.create',
            'sales.update',
            'sales.cancel',
            'sales.delete',

            /*
            |--------------------------------------------------------------------------
            | Estoque
            |--------------------------------------------------------------------------
            */

            'stock.view',
            'stock.adjust',
            'stock.transfer',

            /*
            |--------------------------------------------------------------------------
            | Caixa
            |--------------------------------------------------------------------------
            */

            'cash.view',
            'cash.open',
            'cash.close',
            'cash.movement',

            /*
            |--------------------------------------------------------------------------
            | Financeiro
            |--------------------------------------------------------------------------
            */

            'accounts-receivable.view',
            'accounts-receivable.create',
            'accounts-receivable.update',
            'accounts-receivable.delete',

            'accounts-payable.view',
            'accounts-payable.create',
            'accounts-payable.update',
            'accounts-payable.delete',

            /*
            |--------------------------------------------------------------------------
            | Fiscal
            |--------------------------------------------------------------------------
            */

            'nfe.emit',
            'nfce.emit',
            'invoice.view',

            /*
            |--------------------------------------------------------------------------
            | Relatórios
            |--------------------------------------------------------------------------
            */

            'reports.view',

        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }
    }
}