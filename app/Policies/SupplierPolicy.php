<?php

namespace App\Policies;

use App\Models\Supplier;
use App\Models\User;

class SupplierPolicy
{
    /**
     * Listagem.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('suppliers.view');
    }

    /**
     * Visualizar.
     */
    public function view(User $user, Supplier $supplier): bool
    {
        return $user->company_id === $supplier->company_id
            && $user->can('suppliers.view');
    }

    /**
     * Criar.
     */
    public function create(User $user): bool
    {
        return $user->can('suppliers.create');
    }

    /**
     * Atualizar.
     */
    public function update(User $user, Supplier $supplier): bool
    {
        return $user->company_id === $supplier->company_id
            && $user->can('suppliers.update');
    }

    /**
     * Excluir.
     */
    public function delete(User $user, Supplier $supplier): bool
    {
        return $user->company_id === $supplier->company_id
            && $user->can('suppliers.delete');
    }

    /**
     * Restaurar.
     */
    public function restore(User $user, Supplier $supplier): bool
    {
        return false;
    }

    /**
     * Exclusão permanente.
     */
    public function forceDelete(User $user, Supplier $supplier): bool
    {
        return false;
    }
}