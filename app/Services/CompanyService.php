<?php

namespace App\Services;

use App\Models\Company;
use App\DTO\CompanyDTO;

class CompanyService
{
    public function create(CompanyDTO $dto): Company
    {
        return Company::create($dto->toArray());
    }

    public function update(Company $company, CompanyDTO $dto): Company
    {
        $company->update($dto->toArray());

        return $company->refresh();
    }
}