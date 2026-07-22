@extends('layouts.erp')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Novo Cliente</h1>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Voltar</a>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('clients.store') }}" method="POST">
                @csrf

                @include('clients._form')

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Salvar
                    </button>
                    <a href="{{ route('clients.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection