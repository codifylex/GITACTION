@extends('layouts.erp')

@section('title', 'Editar Produto')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="mb-0">Editar Produto</h2>
        <small class="text-muted">
            Atualize as informações do produto.
        </small>
    </div>

    <a
        href="{{ route('products.index') }}"
        class="btn btn-secondary">

        <i class="bi bi-arrow-left"></i>

        Voltar

    </a>

</div>

<div class="card shadow-sm">

    <div class="card-body">

        <form
            action="{{ route('products.update', $product) }}"
            method="POST">

            @csrf
            @method('PUT')

            @include('products._form')

            <hr>

            <div class="d-flex justify-content-end gap-2">

                <a
                    href="{{ route('products.index') }}"
                    class="btn btn-light">

                    Cancelar

                </a>

                <button
                    type="submit"
                    class="btn btn-primary">

                    <i class="bi bi-check-circle"></i>

                    Salvar Alterações

                </button>

            </div>

        </form>

    </div>

</div>

@endsection