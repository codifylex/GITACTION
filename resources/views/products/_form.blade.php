<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="mb-0"></h2>
        <small class="text-muted">
            
        </small>
    </div>

    <div class="d-flex gap-2">

        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#advancedFields">

            <span id="advancedText">
                Mostrar opções avançadas ▼
            </span>

        </button>
    </div>

</div>

{{-- ===========================
    DADOS GERAIS
=========================== --}}

<div class="card shadow-sm mb-4">

    <div class="card-header">
        <strong>📦 Dados Gerais</strong>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-2 mb-3">
                <label class="form-label">Código <span class="text-danger">*</span></label>

                <input type="text" name="code" class="form-control @error('code') is-invalid @enderror"
                    value="{{ old('code', $product->code ?? '') }}" maxlength="30">

                @error('code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-2 mb-3">
                <label class="form-label">SKU</label>

                <input type="text" name="sku" class="form-control @error('sku') is-invalid @enderror"
                    value="{{ old('sku', $product->sku ?? '') }}" maxlength="50">

                @error('sku')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Código de Barras</label>

                <input type="text" name="barcode" class="form-control @error('barcode') is-invalid @enderror"
                    value="{{ old('barcode', $product->barcode ?? '') }}" maxlength="50">

                @error('barcode')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-2 mb-3">
                <label class="form-label">Tipo <span class="text-danger">*</span></label>

                <select name="type" class="form-select @error('type') is-invalid @enderror">

                    <option value="product" @selected(old('type', $product->type ?? 'product') == 'product')>
                        Produto
                    </option>

                    <option value="service" @selected(old('type', $product->type ?? '') == 'service')>
                        Serviço
                    </option>

                </select>

                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Categoria <span class="text-danger">*</span></label>

                <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">

                    <option value="">Selecione...</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id ?? '') == $category->id)>

                            {{ $category->name }}

                        </option>
                    @endforeach

                </select>

                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Marca</label>

                <select name="brand_id" class="form-select @error('brand_id') is-invalid @enderror">

                    <option value="">Selecione...</option>

                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" @selected(old('brand_id', $product->brand_id ?? '') == $brand->id)>

                            {{ $brand->name }}

                        </option>
                    @endforeach

                </select>

                @error('brand_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-2 mb-3">
                <label class="form-label">Unidade <span class="text-danger">*</span></label>

                <select name="unit_id" class="form-select @error('unit_id') is-invalid @enderror">

                    <option value="">Selecione...</option>

                    @foreach ($units as $unit)
                        <option value="{{ $unit->id }}" @selected(old('unit_id', $product->unit_id ?? '') == $unit->id)>

                            {{ $unit->name }}

                        </option>
                    @endforeach

                </select>

                @error('unit_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Nome <span class="text-danger">*</span></label>

                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name', $product->name ?? '') }}" maxlength="255">

                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>

    </div>

</div>

{{-- ===========================
    PREÇOS
=========================== --}}

<div class="card shadow-sm mb-4">

    <div class="card-header">
        <strong>💰 Preços</strong>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-3 mb-3">
                <label class="form-label">Preço de Custo</label>

                <div class="input-group">
                    <span class="input-group-text">R$</span>

                    <input type="number" step="0.01" min="0" name="cost_price"
                        class="form-control @error('cost_price') is-invalid @enderror"
                        value="{{ old('cost_price', $product->cost_price ?? 0) }}">
                </div>

                @error('cost_price')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Preço de Venda</label>

                <div class="input-group">
                    <span class="input-group-text">R$</span>

                    <input type="number" step="0.01" min="0" name="sale_price"
                        class="form-control @error('sale_price') is-invalid @enderror"
                        value="{{ old('sale_price', $product->sale_price ?? 0) }}">
                </div>

                @error('sale_price')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Preço Promocional</label>

                <div class="input-group">
                    <span class="input-group-text">R$</span>

                    <input type="number" step="0.01" min="0" name="promotional_price"
                        class="form-control @error('promotional_price') is-invalid @enderror"
                        value="{{ old('promotional_price', $product->promotional_price ?? '') }}">
                </div>

                @error('promotional_price')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Margem de Lucro (%)</label>

                <div class="input-group">
                    <input type="number" step="0.01" min="0" name="profit_margin"
                        class="form-control @error('profit_margin') is-invalid @enderror"
                        value="{{ old('profit_margin', $product->profit_margin ?? 0) }}">

                    <span class="input-group-text">%</span>
                </div>

                @error('profit_margin')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

        </div>

    </div>

</div>

{{-- ===========================
    CONTROLE DE ESTOQUE
=========================== --}}

<div class="card shadow-sm mb-4">

    <div class="card-header">
        <strong>📦 Controle de Estoque</strong>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-3 mb-3">
                <label class="form-label">Estoque Mínimo</label>

                <input type="number" step="0.0001" min="0" name="minimum_stock"
                    class="form-control @error('minimum_stock') is-invalid @enderror"
                    value="{{ old('minimum_stock', $product->minimum_stock ?? 0) }}">

                @error('minimum_stock')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Estoque Máximo</label>

                <input type="number" step="0.0001" min="0" name="maximum_stock"
                    class="form-control @error('maximum_stock') is-invalid @enderror"
                    value="{{ old('maximum_stock', $product->maximum_stock ?? 0) }}">

                @error('maximum_stock')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Localização</label>

                <input type="text" name="location" class="form-control @error('location') is-invalid @enderror"
                    value="{{ old('location', $product->location ?? '') }}"
                    placeholder="Ex.: Corredor A - Prateleira 02">

                @error('location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>

    </div>

</div>
<div class="collapse" id="advancedFields">
    {{-- ===========================
    PESO E DIMENSÕES
=========================== --}}

    <div class="card shadow-sm mb-4">

        <div class="card-header">
            <strong>⚖ Peso e Dimensões</strong>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-3 mb-3">
                    <label class="form-label">Peso Bruto (kg)</label>

                    <input type="number" step="0.001" min="0" name="gross_weight"
                        class="form-control @error('gross_weight') is-invalid @enderror"
                        value="{{ old('gross_weight', $product->gross_weight ?? 0) }}">

                    @error('gross_weight')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Peso Líquido (kg)</label>

                    <input type="number" step="0.001" min="0" name="net_weight"
                        class="form-control @error('net_weight') is-invalid @enderror"
                        value="{{ old('net_weight', $product->net_weight ?? 0) }}">

                    @error('net_weight')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-2 mb-3">
                    <label class="form-label">Altura (cm)</label>

                    <input type="number" step="0.01" min="0" name="height"
                        class="form-control @error('height') is-invalid @enderror"
                        value="{{ old('height', $product->height ?? 0) }}">

                    @error('height')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-2 mb-3">
                    <label class="form-label">Largura (cm)</label>

                    <input type="number" step="0.01" min="0" name="width"
                        class="form-control @error('width') is-invalid @enderror"
                        value="{{ old('width', $product->width ?? 0) }}">

                    @error('width')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-2 mb-3">
                    <label class="form-label">Comprimento (cm)</label>

                    <input type="number" step="0.01" min="0" name="length"
                        class="form-control @error('length') is-invalid @enderror"
                        value="{{ old('length', $product->length ?? 0) }}">

                    @error('length')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>

        </div>

    </div>

    {{-- ===========================
    DADOS FISCAIS
=========================== --}}

    <div class="card shadow-sm mb-4">

        <div class="card-header">
            <strong>🧾 Dados Fiscais</strong>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-2 mb-3">
                    <label class="form-label">NCM</label>

                    <input type="text" name="ncm" maxlength="10"
                        class="form-control @error('ncm') is-invalid @enderror"
                        value="{{ old('ncm', $product->ncm ?? '') }}">

                    @error('ncm')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-2 mb-3">
                    <label class="form-label">CEST</label>

                    <input type="text" name="cest" maxlength="10"
                        class="form-control @error('cest') is-invalid @enderror"
                        value="{{ old('cest', $product->cest ?? '') }}">

                    @error('cest')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-2 mb-3">
                    <label class="form-label">CFOP</label>

                    <input type="text" name="cfop" maxlength="4"
                        class="form-control @error('cfop') is-invalid @enderror"
                        value="{{ old('cfop', $product->cfop ?? '') }}">

                    @error('cfop')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-2 mb-3">
                    <label class="form-label">Origem</label>

                    <select name="origin" class="form-select @error('origin') is-invalid @enderror">

                        <option value="">Selecione...</option>

                        <option value="0" @selected(old('origin', $product->origin ?? '') == '0')>
                            0 - Nacional
                        </option>

                        <option value="1" @selected(old('origin', $product->origin ?? '') == '1')>
                            1 - Estrangeira (Importação Direta)
                        </option>

                        <option value="2" @selected(old('origin', $product->origin ?? '') == '2')>
                            2 - Estrangeira (Mercado Interno)
                        </option>

                        <option value="3" @selected(old('origin', $product->origin ?? '') == '3')>
                            3 - Nacional >40% Importado
                        </option>

                        <option value="4" @selected(old('origin', $product->origin ?? '') == '4')>
                            4 - Nacional (PPB)
                        </option>

                        <option value="5" @selected(old('origin', $product->origin ?? '') == '5')>
                            5 - Nacional <40% Importado </option>

                        <option value="6" @selected(old('origin', $product->origin ?? '') == '6')>
                            6 - Estrangeira sem Similar
                        </option>

                        <option value="7" @selected(old('origin', $product->origin ?? '') == '7')>
                            7 - Estrangeira Mercado Interno sem Similar
                        </option>

                        <option value="8" @selected(old('origin', $product->origin ?? '') == '8')>
                            8 - Nacional >70% Importado
                        </option>

                    </select>

                    @error('origin')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-2 mb-3">
                    <label class="form-label">CST ICMS</label>

                    <input type="text" name="cst_icms" maxlength="3"
                        class="form-control @error('cst_icms') is-invalid @enderror"
                        value="{{ old('cst_icms', $product->cst_icms ?? '') }}">

                    @error('cst_icms')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-2 mb-3">
                    <label class="form-label">CSOSN</label>

                    <input type="text" name="csosn" maxlength="4"
                        class="form-control @error('csosn') is-invalid @enderror"
                        value="{{ old('csosn', $product->csosn ?? '') }}">

                    @error('csosn')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>

        </div>

    </div>

    {{-- ===========================
    CONFIGURAÇÕES
=========================== --}}

    <div class="card shadow-sm mb-4">

        <div class="card-header">
            <strong>⚙ Configurações</strong>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-4">

                    <div class="form-check form-switch mb-3">

                        <input class="form-check-input" type="checkbox" id="stock_control" name="stock_control"
                            value="1" @checked(old('stock_control', $product->stock_control ?? true))>

                        <label class="form-check-label" for="stock_control">

                            Controlar Estoque

                        </label>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-check form-switch mb-3">

                        <input class="form-check-input" type="checkbox" id="allow_negative_stock"
                            name="allow_negative_stock" value="1" @checked(old('allow_negative_stock', $product->allow_negative_stock ?? false))>

                        <label class="form-check-label" for="allow_negative_stock">

                            Permitir Estoque Negativo

                        </label>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-check form-switch mb-3">

                        <input class="form-check-input" type="checkbox" id="batch_control" name="batch_control"
                            value="1" @checked(old('batch_control', $product->batch_control ?? false))>

                        <label class="form-check-label" for="batch_control">

                            Controlar Lotes

                        </label>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-check form-switch mb-3">

                        <input class="form-check-input" type="checkbox" id="expiration_control"
                            name="expiration_control" value="1" @checked(old('expiration_control', $product->expiration_control ?? false))>

                        <label class="form-check-label" for="expiration_control">

                            Controlar Validade

                        </label>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-check form-switch mb-3">

                        <input class="form-check-input" type="checkbox" id="featured" name="featured"
                            value="1" @checked(old('featured', $product->featured ?? false))>

                        <label class="form-check-label" for="featured">

                            Produto em Destaque

                        </label>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-check form-switch mb-3">

                        <input class="form-check-input" type="checkbox" id="active" name="active"
                            value="1" @checked(old('active', $product->active ?? true))>

                        <label class="form-check-label" for="active">

                            Produto Ativo

                        </label>

                    </div>

                </div>

            </div>

        </div>

    </div>



    {{-- ===========================
    DESCRIÇÃO
=========================== --}}

    <div class="card shadow-sm mb-4">

        <div class="card-header">
            <strong>📝 Descrição</strong>
        </div>

        <div class="card-body">

            <div class="mb-3">

                <label class="form-label">
                    Descrição do Produto
                </label>

                <textarea name="description" rows="6" class="form-control @error('description') is-invalid @enderror"
                    placeholder="Informe uma descrição detalhada do produto...">{{ old('description', $product->description ?? '') }}</textarea>

                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

        </div>

    </div>

</div>
