@extends('layouts.erp')

@section('title', 'Fornecedores')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Fornecedores</h2>
        <small class="text-muted">Gerencie os fornecedores cadastrados.</small>
    </div>

    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Novo Fornecedor
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <form method="GET" class="row g-3 mb-4">

            <div class="col-md-6">
                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Pesquisar por nome, CPF/CNPJ, e-mail ou cidade..."
                    value="{{ request('search') }}">
            </div>

            <div class="col-md-auto">
                <button class="btn btn-outline-primary">
                    <i class="bi bi-search"></i> Pesquisar
                </button>
            </div>

            @if(request('search'))
                <div class="col-md-auto">
                    <a href="{{ route('suppliers.index') }}" class="btn btn-outline-secondary">
                        Limpar
                    </a>
                </div>
            @endif

        </form>

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-light">
                    <tr>
                        <th width="70">ID</th>
                        <th>Nome</th>
                        <th width="120">Tipo</th>
                        <th width="170">CPF/CNPJ</th>
                        <th>E-mail</th>
                        <th width="150">Cidade</th>
                        <th width="110">Status</th>
                        <th width="220" class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($suppliers as $supplier)

                        <tr>

                            <td>{{ $supplier->id }}</td>

                            <td>{{ $supplier->name }}</td>

                            <td>
                                @if($supplier->type === 'PF')
                                    <span class="badge bg-info">Pessoa Física</span>
                                @else
                                    <span class="badge bg-primary">Pessoa Jurídica</span>
                                @endif
                            </td>

                            <td>{{ $supplier->document }}</td>

                            <td>{{ $supplier->email ?: '-' }}</td>

                            <td>
                                {{ $supplier->city }}
                                @if($supplier->state)
                                    / {{ $supplier->state }}
                                @endif
                            </td>

                            <td>
                                @if($supplier->active)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-danger">Inativo</span>
                                @endif
                            </td>

                            <td class="text-center">

                                <a href="{{ route('suppliers.show', $supplier) }}"
                                   class="btn btn-sm btn-info">
                                    Ver
                                </a>

                                <a href="{{ route('suppliers.edit', $supplier) }}"
                                   class="btn btn-sm btn-warning">
                                    Editar
                                </a>

                                <form action="{{ route('suppliers.destroy', $supplier) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Deseja realmente excluir este fornecedor?')">

                                        Excluir

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">
                                Nenhum fornecedor cadastrado.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="mt-3">
            {{ $suppliers->withQueryString()->links() }}
        </div>

    </div>
</div>

@endsection