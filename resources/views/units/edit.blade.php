@extends('layouts.erp')

@section('title', 'Editar Unidade')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Editar Unidade</h2>
        <small class="text-muted">Atualize os dados da unidade de medida.</small>
    </div>

    <a href="{{ route('units.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <form action="{{ route('units.update', $unit) }}" method="POST">
            @csrf
            @method('PUT')

            @include('units._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-circle"></i> Salvar Alterações
                </button>

                <a href="{{ route('units.index') }}" class="btn btn-light">
                    Cancelar
                </a>
            </div>
        </form>

    </div>
</div>

@endsection