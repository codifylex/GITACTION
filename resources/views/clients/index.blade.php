@extends('layouts.erp')

@section('title', 'Clientes')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Clientes</h2>
        <small class="text-muted">Gerencie os clientes cadastrados.</small>
    </div>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i>
        Novo Cliente
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body p-0">
        @if($clients->isEmpty())
            <div class="text-center py-5">
                <i class="bi bi-people display-3 text-secondary"></i>
                <h5 class="mt-3">Nenhum cliente cadastrado.</h5>
                <p class="text-muted">Clique em <strong>Novo Cliente</strong> para começar.</p>
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Documento</th>
                            <th>Cidade</th>
                            <th>Telefone</th>
                            <th>Limite</th>
                            <th>Status</th>
                            <th width="170">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>
                                    <strong>{{ $client->name }}</strong>
                                    @if($client->trade_name)
                                        <br>
                                        <small class="text-muted">{{ $client->trade_name }}</small>
                                    @endif
                                </td>
                                <td>
                                    @if($client->person_type == 'F')
                                        <span class="badge bg-info">Pessoa Física</span>
                                    @else
                                        <span class="badge bg-primary">Pessoa Jurídica</span>
                                    @endif
                                </td>
                                <td>{{ $client->document }}</td>
                                <td>
                                    {{ $client->city }}
                                    @if($client->state)
                                        / {{ $client->state }}
                                    @endif
                                </td>
                                <td>{{ $client->mobile ?: $client->phone }}</td>
                                <td>R$ {{ number_format($client->credit_limit,2,',','.') }}</td>
                                <td>
                                    @if($client->active)
                                        <span class="badge bg-success">Ativo</span>
                                    @else
                                        <span class="badge bg-danger">Inativo</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('clients.show',$client) }}" class="btn btn-sm btn-outline-secondary">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('clients.edit',$client) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('clients.destroy',$client) }}" method="POST" onsubmit="return confirm('Deseja remover este cliente?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

@if($clients->hasPages())
    <div class="mt-3">
        {{ $clients->links() }}
    </div>
@endif

@endsection