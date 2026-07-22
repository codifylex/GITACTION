<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProductPolicy
{
    /**
     * Listagem.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('products.view');
    }

    /**
     * Visualizar.
     */
    public function view(User $user, Product $product): bool
    {
        return $user->company_id === $product->company_id
            && $user->can('products.view');
    }

    /**
     * Criar.
     */
    public function create(User $user): bool
    {
        return $user->can('products.create');
    }

    /**
     * Atualizar.
     */
    public function update(User $user, Product $product): bool
    {
        return $user->company_id === $product->company_id
            && $user->can('products.update');
    }

    /**
     * Excluir.
     */
    public function delete(User $user, Product $product): bool
    {
        return $user->company_id === $product->company_id
            && $user->can('products.delete');
    }

    /**
     * Restaurar.
     */
    public function restore(User $user, Product $product): bool
    {
        return false;
    }

    /**
     * Exclusão permanente.
     */
    public function forceDelete(User $user, Product $product): bool
    {
        return false;
    }
}