@extends('layouts.erp')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2>Categorias</h2>

        <p class="text-muted mb-0">
            Gerenciamento de categorias de produtos.
        </p>

    </div>

    <a
        href="{{ route('categories.create') }}"
        class="btn btn-primary">

        Nova Categoria

    </a>

</div>

<x-alert />

<x-card>

    <form
        action="{{ route('categories.index') }}"
        method="GET"
        class="row g-3 mb-4">

        <div class="col-md-10">

            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Pesquisar categoria..."
                value="{{ request('search') }}">

        </div>

        <div class="col-md-2 d-grid">

            <button
                type="submit"
                class="btn btn-secondary">

                Pesquisar

            </button>

        </div>

    </form>

    <div class="table-responsive">

        <table class="table table-striped table-hover align-middle">

            <thead>

                <tr>

                    <th width="80">ID</th>

                    <th>Nome</th>

                    <th>Descrição</th>

                    <th width="120">Status</th>

                    <th width="220" class="text-center">
                        Ações
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($categories as $category)

                    <tr>

                        <td>

                            {{ $category->id }}

                        </td>

                        <td>

                            {{ $category->name }}

                        </td>

                        <td>

                            {{ $category->description }}

                        </td>

                        <td>

                            @if($category->active)

                                <span class="badge bg-success">
                                    Ativa
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Inativa
                                </span>

                            @endif

                        </td>

                        <td class="text-center">

                            <a
                                href="{{ route('categories.show', $category) }}"
                                class="btn btn-sm btn-info">

                                Ver

                            </a>

                            <a
                                href="{{ route('categories.edit', $category) }}"
                                class="btn btn-sm btn-warning">

                                Editar

                            </a>

                            <form
                                action="{{ route('categories.destroy', $category) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Deseja realmente excluir esta categoria?')">

                                    Excluir

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="5"
                            class="text-center">

                            Nenhuma categoria encontrada.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-3">

        {{ $categories->withQueryString()->links() }}

    </div>

</x-card>

@endsection