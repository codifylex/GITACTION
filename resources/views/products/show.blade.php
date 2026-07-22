@extends('layouts.erp')
@section('title', 'Produto')
@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-0">{{ $product->name }}</h2>
            <small class="text-muted">Visualização do produto.</small>
        </div>
        <div>
            <a href="{{ route('products.barcode', $product) }}" class="btn btn-dark" target="_blank">

                🏷️ Imprimir Código

            </a>
            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">
                <i class="bi bi-pencil"></i> Editar
            </a>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">

            <div class="card shadow-sm mb-4">
                <div class="card-header"><strong>📦 Dados Gerais</strong></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <strong>Código</strong><br>
                            {{ $product->code }}
                        </div>
                        <div class="col-md-3 mb-3">
                            <strong>SKU</strong><br>
                            {{ $product->sku ?: '-' }}
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Código de Barras</strong><br>
                            {{ $product->barcode ?: '-' }}
                        </div>
                        <div class="col-md-8 mb-3">
                            <strong>Nome</strong><br>
                            {{ $product->name }}
                        </div>
                        <div class="col-md-4 mb-3">
                            <strong>Tipo</strong><br>
                            @if ($product->type == 'product')
                                Produto
                            @else
                                Serviço
                            @endif
                        </div>
                        <div class="col-md-4 mb-3">
                            <strong>Categoria</strong><br>
                            {{ $product->category?->name }}
                        </div>
                        <div class="col-md-4 mb-3">
                            <strong>Marca</strong><br>
                            {{ $product->brand?->name ?? '-' }}
                        </div>
                        <div class="col-md-4 mb-3">
                            <strong>Unidade</strong><br>
                            {{ $product->unit?->name }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-header"><strong>💰 Valores</strong></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <strong>Custo</strong><br>
                            R$ {{ number_format($product->cost_price, 2, ',', '.') }}
                        </div>
                        <div class="col-md-3">
                            <strong>Venda</strong><br>
                            R$ {{ number_format($product->sale_price, 2, ',', '.') }}
                        </div>
                        <div class="col-md-3">
                            <strong>Promocional</strong><br>
                            @if ($product->promotional_price)
                                R$ {{ number_format($product->promotional_price, 2, ',', '.') }}
                            @else
                                -
                            @endif
                        </div>
                        <div class="col-md-3">
                            <strong>Margem</strong><br>
                            {{ number_format($product->profit_margin, 2, ',', '.') }}%
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-header"><strong>📦 Estoque</strong></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <strong>Mínimo</strong><br>
                            {{ $product->minimum_stock }}
                        </div>
                        <div class="col-md-4">
                            <strong>Máximo</strong><br>
                            {{ $product->maximum_stock }}
                        </div>
                        <div class="col-md-4">
                            <strong>Localização</strong><br>
                            {{ $product->location ?: '-' }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header"><strong>📝 Descrição</strong></div>
                <div class="card-body">
                    {!! nl2br(e($product->description ?: 'Nenhuma descrição cadastrada.')) !!}
                </div>
            </div>

        </div>

        <div class="col-lg-4">

            <div class="card shadow-sm mb-4">
                <div class="card-header"><strong>⚙ Situação</strong></div>
                <div class="card-body">
                    <table class="table table-borderless mb-0">
                        <tr>
                            <td>Ativo</td>
                            <td class="text-end">
                                @if ($product->active)
                                    <span class="badge bg-success">Sim</span>
                                @else
                                    <span class="badge bg-danger">Não</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Destaque</td>
                            <td class="text-end">{{ $product->featured ? 'Sim' : 'Não' }}</td>
                        </tr>
                        <tr>
                            <td>Controla Estoque</td>
                            <td class="text-end">{{ $product->stock_control ? 'Sim' : 'Não' }}</td>
                        </tr>
                        <tr>
                            <td>Estoque Negativo</td>
                            <td class="text-end">{{ $product->allow_negative_stock ? 'Sim' : 'Não' }}</td>
                        </tr>
                        <tr>
                            <td>Controla Lote</td>
                            <td class="text-end">{{ $product->batch_control ? 'Sim' : 'Não' }}</td>
                        </tr>
                        <tr>
                            <td>Controla Validade</td>
                            <td class="text-end">{{ $product->expiration_control ? 'Sim' : 'Não' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header"><strong>🧾 Dados Fiscais</strong></div>
                <div class="card-body">
                    <table class="table table-sm table-borderless mb-0">
                        <tr>
                            <td>NCM</td>
                            <td>{{ $product->ncm ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>CEST</td>
                            <td>{{ $product->cest ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>CFOP</td>
                            <td>{{ $product->cfop ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>Origem</td>
                            <td>{{ $product->origin ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>CST ICMS</td>
                            <td>{{ $product->cst_icms ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>CSOSN</td>
                            <td>{{ $product->csosn ?: '-' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
