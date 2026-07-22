@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Detalhes do Cliente</h1>

        <div>
            @can('update', $client)
                <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">
                    <i class="bi bi-pencil"></i> Editar
                </a>
            @endcan

            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>

    <div class="row">

        {{-- Dados principais --}}
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header"><strong>Dados do Cliente</strong></div>
                <div class="card-body">
                    <p><strong>Tipo:</strong> {{ $client->person_type == 'F' ? 'Pessoa Física' : 'Pessoa Jurídica' }}</p>
                    <p><strong>Nome:</strong> {{ $client->name }}</p>
                    @if($client->trade_name)
                        <p><strong>Nome Fantasia:</strong> {{ $client->trade_name }}</p>
                    @endif
                    <p><strong>Documento:</strong> {{ $client->document_formatted }}</p>
                    <p><strong>Email:</strong> {{ $client->email ?? '-' }}</p>
                    <p><strong>Telefone:</strong> {{ $client->phone ?? '-' }}</p>
                    <p><strong>Celular:</strong> {{ $client->mobile ?? '-' }}</p>
                </div>
            </div>
        </div>

        {{-- Endereço --}}
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header"><strong>Endereço</strong></div>
                <div class="card-body">
                    <p>{{ $client->address ?? '-' }}@if($client->number), {{ $client->number }}@endif</p>
                    @if($client->complement)
                        <p>{{ $client->complement }}</p>
                    @endif
                    <p>{{ $client->district ?? '-' }}</p>
                    <p>{{ $client->city ?? '-' }} / {{ $client->state ?? '-' }}</p>
                    <p>CEP: {{ $client->zip_code ?? '-' }}</p>
                </div>
            </div>
        </div>

        {{-- Financeiro --}}
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header"><strong>Financeiro</strong></div>
                <div class="card-body">
                    <p><strong>Limite de Crédito:</strong> R$ {{ number_format($client->credit_limit, 2, ',', '.') }}</p>
                </div>
            </div>
        </div>

        {{-- Status --}}
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header"><strong>Status</strong></div>
                <div class="card-body">
                    @if($client->active)
                        <span class="badge bg-success">Ativo</span>
                    @else
                        <span class="badge bg-secondary">Inativo</span>
                    @endif
                </div>
            </div>
        </div>

        {{-- Observações --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Observações</strong></div>
                <div class="card-body">
                    {!! nl2br(e($client->notes ?? 'Nenhuma observação')) !!}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection