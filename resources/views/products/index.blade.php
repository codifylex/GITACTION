@extends('layouts.erp')
@section('title', 'Produtos')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Produtos</h2>
        <small class="text-muted">Gerencie os produtos cadastrados.</small>
    </div>
    <a href="{{ route('products.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Novo Produto
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="GET" class="row g-3 mb-4">
            <div class="col-md-6">
                <input type="text" name="search" class="form-control" placeholder="Pesquisar por código, SKU, código de barras ou nome..." value="{{ request('search') }}">
            </div>
            <div class="col-md-auto">
                <button class="btn btn-outline-primary">
                    <i class="bi bi-search"></i> Pesquisar
                </button>
            </div>
            @if(request('search'))
                <div class="col-md-auto">
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Limpar</a>
                </div>
            @endif
        </form>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="90">Código</th>
                        <th>Produto</th>
                        <th width="180">Categoria</th>
                        <th width="160">Marca</th>
                        <th width="90">Unidade</th>
                        <th width="130" class="text-end">Preço Venda</th>
                        <th width="110">Status</th>
                        <th width="220" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->code }}</td>
                        <td>
                            <strong>{{ $product->name }}</strong>
                            @if($product->barcode)
                                <br><small class="text-muted">Cód. Barras: {{ $product->barcode }}</small>
                            @endif
                        </td>
                        <td>{{ $product->category?->name }}</td>
                        <td>{{ $product->brand?->name ?? '-' }}</td>
                        <td>{{ $product->unit?->symbol ?? $product->unit?->name }}</td>
                        <td class="text-end">R$ {{ number_format($product->sale_price,2,',','.') }}</td>
                        <td>
                            @if($product->active)
                                <span class="badge bg-success">Ativo</span>
                            @else
                                <span class="badge bg-danger">Inativo</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('products.show',$product) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('products.edit',$product) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('products.destroy',$product) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Deseja excluir este produto?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-muted">Nenhum produto cadastrado.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $products->withQueryString()->links() }}
        </div>
    </div>
</div>

@endsection