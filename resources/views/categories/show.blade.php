@extends('layouts.erp')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2>Detalhes da Categoria</h2>

        <p class="text-muted mb-0">
            Visualização dos dados da categoria.
        </p>

    </div>

    <div>

        <a
            href="{{ route('categories.edit', $category) }}"
            class="btn btn-warning">

            Editar

        </a>

        <a
            href="{{ route('categories.index') }}"
            class="btn btn-secondary">

            Voltar

        </a>

    </div>

</div>

<x-alert />

<x-card>

    <x-slot:header>

        Categoria #{{ $category->id }}

    </x-slot:header>

    <div class="row">

        <div class="col-md-6 mb-3">

            <label class="form-label fw-bold">

                Nome

            </label>

            <p class="form-control-plaintext">

                {{ $category->name }}

            </p>

        </div>

        <div class="col-md-6 mb-3">

            <label class="form-label fw-bold">

                Status

            </label>

            <p>

                @if($category->active)

                    <span class="badge bg-success">

                        Ativa

                    </span>

                @else

                    <span class="badge bg-danger">

                        Inativa

                    </span>

                @endif

            </p>

        </div>

    </div>

    <div class="mb-3">

        <label class="form-label fw-bold">

            Descrição

        </label>

        <p class="form-control-plaintext">

            {{ $category->description ?: '-' }}

        </p>

    </div>

    <hr>

    <div class="row">

        <div class="col-md-6">

            <label class="form-label fw-bold">

                Criado em

            </label>

            <p>

                {{ $category->created_at?->format('d/m/Y H:i') }}

            </p>

        </div>

        <div class="col-md-6">

            <label class="form-label fw-bold">

                Última atualização

            </label>

            <p>

                {{ $category->updated_at?->format('d/m/Y H:i') }}

            </p>

        </div>

    </div>

    <div class="mt-4">

        <form
            action="{{ route('categories.destroy', $category) }}"
            method="POST">

            @csrf
            @method('DELETE')

            <button
                type="submit"
                class="btn btn-danger"
                onclick="return confirm('Deseja realmente excluir esta categoria?')">

                Excluir Categoria

            </button>

        </form>

    </div>

</x-card>

@endsection