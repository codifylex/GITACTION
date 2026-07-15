@extends('layouts.erp')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2>Nova Categoria</h2>

        <p class="text-muted mb-0">
            Preencha os dados para cadastrar uma nova categoria.
        </p>

    </div>

    <a
        href="{{ route('categories.index') }}"
        class="btn btn-secondary">

        Voltar

    </a>

</div>

<x-alert />

<x-card>

    <x-slot:header>

        Cadastro de Categoria

    </x-slot:header>

    <form
        action="{{ route('categories.store') }}"
        method="POST">

        @include('categories._form')

    </form>

</x-card>

@endsection