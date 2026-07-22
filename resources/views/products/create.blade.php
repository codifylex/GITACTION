@extends('layouts.erp')
@section('title', 'Novo Produto')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Novo Produto</h2>
        <small class="text-muted">Cadastre um novo produto.</small>
    </div>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            @include('products._form')
            <hr>
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('products.index') }}" class="btn btn-light">Cancelar</a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-circle"></i> Salvar Produto
                </button>
            </div>
        </form>
    </div>
</div>

@endsection