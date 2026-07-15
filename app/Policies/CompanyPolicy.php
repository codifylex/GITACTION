<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Company;

class CompanyPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('companies.view');
    }

    public function view(User $user): bool
    {
        return $user->can('companies.view');
    }

    public function create(User $user): bool
    {
        return $user->can('companies.create');
    }

    public function update(User $user): bool
    {
        return $user->can('companies.update');
    }

    public function delete(User $user): bool
    {
        return $user->can('companies.delete');
    }
}