<?php

namespace App\Policies;

use App\Models\Unit;
use App\Models\User;

class UnitPolicy
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
    public function view(User $user, Unit $unit): bool
    {
        return $user->company_id === $unit->company_id;
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
    public function update(User $user, Unit $unit): bool
    {
        return $user->company_id === $unit->company_id
            && $user->can('products.update');
    }

    /**
     * Excluir.
     */
    public function delete(User $user, Unit $unit): bool
    {
        return $user->company_id === $unit->company_id
            && $user->can('products.delete');
    }
}