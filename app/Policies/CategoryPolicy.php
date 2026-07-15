<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Category;

class CategoryPolicy
{
    /**
     * Listar categorias.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('category.view');
    }

    /**
     * Visualizar uma categoria.
     */
    public function view(User $user, Category $category): bool
    {
        return $user->can('category.view')
            && $user->company_id === $category->company_id;
    }

    /**
     * Criar categoria.
     */
    public function create(User $user): bool
    {
        return $user->can('category.create');
    }

    /**
     * Atualizar categoria.
     */
    public function update(User $user, Category $category): bool
    {
        return $user->can('category.update')
            && $user->company_id === $category->company_id;
    }

    /**
     * Excluir categoria.
     */
    public function delete(User $user, Category $category): bool
    {
        return $user->can('category.delete')
            && $user->company_id === $category->company_id;
    }

    /**
     * Restaurar categoria.
     */
    public function restore(User $user, Category $category): bool
    {
        return $user->can('category.restore')
            && $user->company_id === $category->company_id;
    }

    /**
     * Excluir permanentemente.
     */
    public function forceDelete(User $user, Category $category): bool
    {
        return $user->can('category.force-delete')
            && $user->company_id === $category->company_id;
    }
}