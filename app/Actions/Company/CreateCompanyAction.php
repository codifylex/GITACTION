<?php

namespace App\Actions\Company;

use App\DTO\CompanyDTO;
use App\Models\Company;
use App\Services\CompanyService;

class CreateCompanyAction
{
    public function __construct(
        protected CompanyService $service
    ){}

    public function execute(CompanyDTO $dto): Company
    {
        return $this->service->create($dto);
    }
}