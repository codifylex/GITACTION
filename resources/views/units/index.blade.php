@extends('layouts.erp')

@section('title', 'Unidades')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Unidades</h2>
        <small class="text-muted">Cadastro de unidades de medida.</small>
    </div>

    <a href="{{ route('units.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Nova Unidade
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
                    placeholder="Pesquisar por nome ou símbolo..."
                    value="{{ request('search') }}">
            </div>

            <div class="col-md-auto">
                <button class="btn btn-outline-primary">
                    <i class="bi bi-search"></i> Pesquisar
                </button>
            </div>

            @if(request('search'))
                <div class="col-md-auto">
                    <a href="{{ route('units.index') }}" class="btn btn-outline-secondary">
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
                        <th width="120">Símbolo</th>
                        <th width="120">Status</th>
                        <th width="220" class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($units as $unit)

                        <tr>
                            <td>{{ $unit->id }}</td>

                            <td>{{ $unit->name }}</td>

                            <td>
                                <span class="badge bg-secondary">
                                    {{ $unit->symbol }}
                                </span>
                            </td>

                            <td>
                                @if($unit->active)
                                    <span class="badge bg-success">Ativa</span>
                                @else
                                    <span class="badge bg-danger">Inativa</span>
                                @endif
                            </td>

                            <td class="text-center">

                                <a
                                    href="{{ route('units.show', $unit) }}"
                                    class="btn btn-sm btn-info">
                                    Ver
                                </a>

                                <a
                                    href="{{ route('units.edit', $unit) }}"
                                    class="btn btn-sm btn-warning">
                                    Editar
                                </a>

                                <form
                                    action="{{ route('units.destroy', $unit) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Deseja realmente excluir esta unidade?')">

                                        Excluir

                                    </button>

                                </form>

                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                Nenhuma unidade cadastrada.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>
        </div>

        <div class="mt-3">
            {{ $units->withQueryString()->links() }}
        </div>

    </div>
</div>

@endsection