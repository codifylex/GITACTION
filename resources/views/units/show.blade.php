@extends('layouts.erp')

@section('title', 'Detalhes da Unidade')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Detalhes da Unidade</h2>
        <small class="text-muted">Visualização dos dados da unidade de medida.</small>
    </div>

    <div>
        <a href="{{ route('units.edit', $unit) }}" class="btn btn-warning">
            <i class="bi bi-pencil"></i> Editar
        </a>

        <a href="{{ route('units.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">ID</div>
            <div class="col-md-9">{{ $unit->id }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Nome</div>
            <div class="col-md-9">{{ $unit->name }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Slug</div>
            <div class="col-md-9">{{ $unit->slug }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Símbolo</div>
            <div class="col-md-9">
                <span class="badge bg-secondary">
                    {{ $unit->symbol }}
                </span>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Descrição</div>
            <div class="col-md-9">
                {{ $unit->description ?: '-' }}
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Status</div>
            <div class="col-md-9">
                @if($unit->active)
                    <span class="badge bg-success">Ativa</span>
                @else
                    <span class="badge bg-danger">Inativa</span>
                @endif
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Criada em</div>
            <div class="col-md-9">
                {{ $unit->created_at?->format('d/m/Y H:i') }}
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 fw-bold">Última atualização</div>
            <div class="col-md-9">
                {{ $unit->updated_at?->format('d/m/Y H:i') }}
            </div>
        </div>

    </div>
</div>

@endsection