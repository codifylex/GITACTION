@extends('layouts.erp')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="mb-1">Editar Marca</h1>
        <p class="text-muted mb-0">Atualize os dados da marca.</p>
    </div>
    <a href="{{ route('brands.index') }}" class="btn btn-secondary">Voltar</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('brands.update', $brand) }}" method="POST">
            @csrf
            @method('PUT')
            @include('brands._form')
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                <a href="{{ route('brands.index') }}" class="btn btn-light">Cancelar</a>
            </div>
        </form>
    </div>
</div>

@endsection