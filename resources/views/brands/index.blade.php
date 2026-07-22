@extends('layouts.erp')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="mb-1">Marcas</h1>
        <p class="text-muted mb-0">Gerenciamento de marcas de produtos.</p>
    </div>
    <a href="{{ route('brands.create') }}" class="btn btn-primary">Nova Marca</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="GET" class="row g-3 mb-4">
            <div class="col-md-10">
                <input type="text" name="search" class="form-control" placeholder="Pesquisar marca..." value="{{ request('search') }}">
            </div>
            <div class="col-md-2 d-grid">
                <button class="btn btn-secondary">Pesquisar</button>
            </div>
        </form>

        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th width="80">ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th width="120">Status</th>
                    <th width="220">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($brands as $brand)
                    <tr>
                        <td>{{ $brand->id }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>{{ $brand->description }}</td>
                        <td>
                            @if($brand->active)
                                <span class="badge bg-success">Ativa</span>
                            @else
                                <span class="badge bg-danger">Inativa</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('brands.show',$brand) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('brands.edit',$brand) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('brands.destroy',$brand) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Deseja excluir esta marca?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Nenhuma marca encontrada.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $brands->links() }}
    </div>
</div>

@endsection