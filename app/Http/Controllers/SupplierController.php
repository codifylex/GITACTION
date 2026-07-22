<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    use AuthorizesRequests;

    /**
     * Listagem.
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Supplier::class);

        $query = Supplier::query()
            ->where('company_id', auth()->user()->company_id);

        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('document', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('city', 'like', "%{$search}%");
            });
        }

        $suppliers = $query
            ->orderBy('name')
            ->paginate(15);

        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Formulário de criação.
     */
    public function create()
    {
        $this->authorize('create', Supplier::class);

        return view('suppliers.create');
    }

    /**
     * Salvar.
     */
    public function store(StoreSupplierRequest $request)
    {
        $this->authorize('create', Supplier::class);

        Supplier::create([
            'company_id'         => auth()->user()->company_id,
            'type'               => $request->type,
            'name'               => $request->name,
            'document'           => $request->document,
            'state_registration' => $request->state_registration,
            'email'              => $request->email,
            'phone'              => $request->phone,
            'mobile'             => $request->mobile,
            'zip_code'           => $request->zip_code,
            'address'            => $request->address,
            'number'             => $request->number,
            'complement'         => $request->complement,
            'district'           => $request->district,
            'city'               => $request->city,
            'state'              => strtoupper($request->state),
            'active'             => $request->boolean('active'),
        ]);

        return redirect()
            ->route('suppliers.index')
            ->with('success', 'Fornecedor cadastrado com sucesso.');
    }

    /**
     * Visualizar.
     */
    public function show(Supplier $supplier)
    {
        $this->authorize('view', $supplier);

        return view('suppliers.show', compact('supplier'));
    }

    /**
     * Formulário de edição.
     */
    public function edit(Supplier $supplier)
    {
        $this->authorize('update', $supplier);

        return view('suppliers.edit', compact('supplier'));
    }

    /**
     * Atualizar.
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        $this->authorize('update', $supplier);

        $supplier->update([
            'type'               => $request->type,
            'name'               => $request->name,
            'document'           => $request->document,
            'state_registration' => $request->state_registration,
            'email'              => $request->email,
            'phone'              => $request->phone,
            'mobile'             => $request->mobile,
            'zip_code'           => $request->zip_code,
            'address'            => $request->address,
            'number'             => $request->number,
            'complement'         => $request->complement,
            'district'           => $request->district,
            'city'               => $request->city,
            'state'              => strtoupper($request->state),
            'active'             => $request->boolean('active'),
        ]);

        return redirect()
            ->route('suppliers.index')
            ->with('success', 'Fornecedor atualizado com sucesso.');
    }

    /**
     * Excluir.
     */
    public function destroy(Supplier $supplier)
    {
        $this->authorize('delete', $supplier);

        $supplier->delete();

        return redirect()
            ->route('suppliers.index')
            ->with('success', 'Fornecedor removido com sucesso.');
    }
}