<?php

namespace App\Actions\Company;

use App\DTO\CompanyDTO;
use App\Models\Company;
use App\Services\CompanyService;

class UpdateCompanyAction
{
    public function __construct(
        protected CompanyService $service
    ){}

    public function execute(
        Company $company,
        CompanyDTO $dto
    ): Company
    {
        return $this->service->update($company,$dto);
    }
}