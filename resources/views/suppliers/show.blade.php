@extends('layouts.erp')

@section('title', 'Fornecedor')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Fornecedor</h2>
        <small class="text-muted">Visualização dos dados do fornecedor.</small>
    </div>

    <div>
        <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-warning">
            <i class="bi bi-pencil"></i> Editar
        </a>

        <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-header">
        <strong>Dados Gerais</strong>
    </div>

    <div class="card-body">

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">ID</div>
            <div class="col-md-9">{{ $supplier->id }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Tipo</div>
            <div class="col-md-9">
                {{ $supplier->type == 'PJ' ? 'Pessoa Jurídica' : 'Pessoa Física' }}
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Nome / Razão Social</div>
            <div class="col-md-9">{{ $supplier->name }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">CPF/CNPJ</div>
            <div class="col-md-9">{{ $supplier->document }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Inscrição Estadual</div>
            <div class="col-md-9">{{ $supplier->state_registration ?: '-' }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Status</div>
            <div class="col-md-9">
                @if($supplier->active)
                    <span class="badge bg-success">Ativo</span>
                @else
                    <span class="badge bg-danger">Inativo</span>
                @endif
            </div>
        </div>

    </div>
</div>

<div class="card shadow-sm mt-4">
    <div class="card-header">
        <strong>Contato</strong>
    </div>

    <div class="card-body">

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">E-mail</div>
            <div class="col-md-9">{{ $supplier->email ?: '-' }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Telefone</div>
            <div class="col-md-9">{{ $supplier->phone ?: '-' }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Celular</div>
            <div class="col-md-9">{{ $supplier->mobile ?: '-' }}</div>
        </div>

    </div>
</div>

<div class="card shadow-sm mt-4">
    <div class="card-header">
        <strong>Endereço</strong>
    </div>

    <div class="card-body">

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">CEP</div>
            <div class="col-md-9">{{ $supplier->zip_code ?: '-' }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Endereço</div>
            <div class="col-md-9">{{ $supplier->address ?: '-' }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Número</div>
            <div class="col-md-9">{{ $supplier->number ?: '-' }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Complemento</div>
            <div class="col-md-9">{{ $supplier->complement ?: '-' }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Bairro</div>
            <div class="col-md-9">{{ $supplier->district ?: '-' }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Cidade</div>
            <div class="col-md-9">
                {{ $supplier->city ?: '-' }}
                @if($supplier->state)
                    / {{ $supplier->state }}
                @endif
            </div>
        </div>

    </div>
</div>

<div class="card shadow-sm mt-4">
    <div class="card-header">
        <strong>Informações do Registro</strong>
    </div>

    <div class="card-body">

        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Criado em</div>
            <div class="col-md-9">
                {{ $supplier->created_at?->format('d/m/Y H:i') }}
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 fw-bold">Última atualização</div>
            <div class="col-md-9">
                {{ $supplier->updated_at?->format('d/m/Y H:i') }}
            </div>
        </div>

    </div>
</div>

@endsection