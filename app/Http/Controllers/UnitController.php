<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use App\Models\Unit;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UnitController extends Controller
{
    use AuthorizesRequests;

    /**
     * Listagem.
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Unit::class);

        $query = Unit::query()
            ->where('company_id', auth()->user()->company_id);

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', "%{$request->search}%")
                  ->orWhere('symbol', 'like', "%{$request->search}%");
            });
        }

        $units = $query
            ->orderBy('name')
            ->paginate(15);

        return view('units.index', compact('units'));
    }

    /**
     * Formulário de criação.
     */
    public function create()
    {
        $this->authorize('create', Unit::class);

        return view('units.create');
    }

    /**
     * Salvar.
     */
    public function store(StoreUnitRequest $request)
    {
        $this->authorize('create', Unit::class);

        Unit::create([
            'company_id' => auth()->user()->company_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'symbol' => strtoupper($request->symbol),
            'description' => $request->description,
            'active' => $request->boolean('active'),
        ]);

        return redirect()->route('units.index')->with('success', 'Unidade cadastrada com sucesso.');
    }

    /**
     * Visualizar.
     */
    public function show(Unit $unit)
    {
        $this->authorize('view', $unit);

        return view('units.show', compact('unit'));
    }

    /**
     * Formulário de edição.
     */
    public function edit(Unit $unit)
    {
        $this->authorize('update', $unit);

        return view('units.edit', compact('unit'));
    }

    /**
     * Atualizar.
     */
    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        $this->authorize('update', $unit);

        $unit->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'symbol' => strtoupper($request->symbol),
            'description' => $request->description,
            'active' => $request->boolean('active'),
        ]);

        return redirect()
            ->route('units.index')
            ->with('success', 'Unidade atualizada com sucesso.');
    }

    /**
     * Excluir.
     */
    public function destroy(Unit $unit)
    {
        $this->authorize('delete', $unit);

        $unit->delete();

        return redirect()
            ->route('units.index')
            ->with('success', 'Unidade removida com sucesso.');
    }
}