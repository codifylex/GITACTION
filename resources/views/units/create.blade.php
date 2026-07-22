@extends('layouts.erp')

@section('title', 'Nova Unidade')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Nova Unidade</h2>
        <small class="text-muted">Cadastre uma nova unidade de medida.</small>
    </div>

    <a href="{{ route('units.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <form action="{{ route('units.store') }}" method="POST">
            @csrf

            @include('units._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-circle"></i> Salvar
                </button>

                <a href="{{ route('units.index') }}" class="btn btn-light">
                    Cancelar
                </a>
            </div>
        </form>

    </div>
</div>

@endsection