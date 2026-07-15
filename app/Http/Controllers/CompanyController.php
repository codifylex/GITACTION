<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\DTO\CompanyDTO;
use Illuminate\Http\Response;
use App\Http\Requests\CompanyRequest;
use App\Actions\Company\CreateCompanyAction;
use App\Actions\Company\UpdateCompanyAction;
use App\Http\Resources\CompanyResource;

class CompanyController extends Controller
{
    public function index()
    {
        return CompanyResource::collection(
            Company::paginate()
        );
    }

    public function store(
        CompanyRequest $request,
        CreateCompanyAction $action
    )
    {
        $company = $action->execute(
            CompanyDTO::fromRequest($request)
        );

        return new CompanyResource($company);
    }

    public function show(Company $company)
    {
        return new CompanyResource($company);
    }

    public function update(
        CompanyRequest $request,
        Company $company,
        UpdateCompanyAction $action
    )
    {
        $company = $action->execute(
            $company,
            CompanyDTO::fromRequest($request)
        );

        return new CompanyResource($company);
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return response()->noContent();
    }
}