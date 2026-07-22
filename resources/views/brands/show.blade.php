@extends('layouts.erp')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="mb-1">Detalhes da Marca</h1>
        <p class="text-muted mb-0">Visualização dos dados da marca.</p>
    </div>
    <div>
        <a href="{{ route('brands.edit', $brand) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('brands.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-2"><strong>ID</strong></div>
            <div class="col-md-10">{{ $brand->id }}</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"><strong>Nome</strong></div>
            <div class="col-md-10">{{ $brand->name }}</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"><strong>Slug</strong></div>
            <div class="col-md-10">{{ $brand->slug }}</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"><strong>Descrição</strong></div>
            <div class="col-md-10">{{ $brand->description ?: '-' }}</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"><strong>Status</strong></div>
            <div class="col-md-10">
                @if($brand->active)
                    <span class="badge bg-success">Ativa</span>
                @else
                    <span class="badge bg-danger">Inativa</span>
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"><strong>Criada em</strong></div>
            <div class="col-md-10">{{ $brand->created_at?->format('d/m/Y H:i') }}</div>
        </div>
        <div class="row">
            <div class="col-md-2"><strong>Última atualização</strong></div>
            <div class="col-md-10">{{ $brand->updated_at?->format('d/m/Y H:i') }}</div>
        </div>
    </div>
</div>

@endsection