<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    use AuthorizesRequests;

    /**
     * Listagem.
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Brand::class);

        $query = Brand::query()
            ->where('company_id', auth()->user()->company_id);

        if ($request->filled('search')) {
            $query->where('name', 'like', "%{$request->search}%");
        }

        $brands = $query
            ->orderBy('name')
            ->paginate(15);

        return view('brands.index', compact('brands'));
    }

    /**
     * Formulário de criação.
     */
    public function create()
    {
        $this->authorize('create', Brand::class);

        return view('brands.create');
    }

    /**
     * Salvar.
     */
    public function store(StoreBrandRequest $request)
    {
        $this->authorize('create', Brand::class);

        Brand::create([
            'company_id' => auth()->user()->company_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'active' => $request->boolean('active'),
        ]);

        return redirect()
            ->route('brands.index')
            ->with('success', 'Marca cadastrada com sucesso.');
    }

    /**
     * Visualizar.
     */
    public function show(Brand $brand)
    {
        $this->authorize('view', $brand);

        return view('brands.show', compact('brand'));
    }

    /**
     * Formulário de edição.
     */
    public function edit(Brand $brand)
    {
        $this->authorize('update', $brand);

        return view('brands.edit', compact('brand'));
    }

    /**
     * Atualizar.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $this->authorize('update', $brand);

        $brand->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'active' => $request->boolean('active'),
        ]);

        return redirect()
            ->route('brands.index')
            ->with('success', 'Marca atualizada com sucesso.');
    }

    /**
     * Excluir.
     */
    public function destroy(Brand $brand)
    {
        $this->authorize('delete', $brand);

        $brand->delete();

        return redirect()
            ->route('brands.index')
            ->with('success', 'Marca removida com sucesso.');
    }
}