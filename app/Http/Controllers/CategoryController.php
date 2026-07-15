<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    use AuthorizesRequests;

    /**
     * Listagem.
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Category::class);

        $query = Category::query()
            ->where('company_id', auth()->user()->company_id);

        if ($request->filled('search')) {
            $query->where('name', 'like', "%{$request->search}%");
        }

        $categories = $query
            ->orderBy('name')
            ->paginate(15)
            ->withQueryString();

        return view('categories.index', compact('categories'));
    }

    /**
     * Formulário de cadastro.
     */
    public function create()
    {
        $this->authorize('create', Category::class);

        return view('categories.create');
    }

    /**
     * Salvar.
     */
    public function store(StoreCategoryRequest $request)
    {
        $this->authorize('create', Category::class);

        Category::create([
            'company_id' => auth()->user()->company_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'active' => $request->boolean('active'),
        ]);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Categoria cadastrada com sucesso.');
    }

    /**
     * Visualizar.
     */
    public function show(Category $category)
    {
        $this->authorize('view', $category);

        return view('categories.show', compact('category'));
    }

    /**
     * Formulário de edição.
     */
    public function edit(Category $category)
    {
        $this->authorize('update', $category);

        return view('categories.edit', compact('category'));
    }

    /**
     * Atualizar.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $this->authorize('update', $category);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'active' => $request->boolean('active'),
        ]);
        
        return redirect()
            ->route('categories.index')
            ->with('success', 'Categoria atualizada com sucesso.');
    }

    /**
     * Excluir.
     */
    public function destroy(Category $category)
    {
        $this->authorize('delete', $category);

        $category->delete();

        return redirect()
            ->route('categories.index')
            ->with('success', 'Categoria removida com sucesso.');
    }
}
