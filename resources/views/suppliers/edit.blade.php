@extends('layouts.erp')

@section('title', 'Editar Fornecedor')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Editar Fornecedor</h2>
        <small class="text-muted">Atualize os dados do fornecedor.</small>
    </div>

    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <form action="{{ route('suppliers.update', $supplier) }}" method="POST">
            @csrf
            @method('PUT')

            @include('suppliers._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-circle"></i> Salvar Alterações
                </button>

                <a href="{{ route('suppliers.index') }}" class="btn btn-light">
                    Cancelar
                </a>
            </div>

        </form>

    </div>
</div>

@endsection