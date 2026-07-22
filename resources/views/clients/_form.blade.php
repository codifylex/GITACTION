<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0"></h2>
        <small class="text-muted"></small>
    </div>

    <div class="d-flex gap-2">
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#advancedFields">
            <span id="advancedText">Mostrar opções avançadas ▼</span>
        </button>
    </div>
</div>

{{-- ===========================
    DADOS GERAIS
=========================== --}}
<div class="card shadow-sm mb-4">
    <div class="card-header"><strong>👤 Dados Gerais</strong></div>

    <div class="card-body">
        <div class="row">

            <div class="col-md-3 mb-3">
                <label class="form-label">Tipo Pessoa <span class="text-danger">*</span></label>
                <select name="person_type" class="form-select @error('person_type') is-invalid @enderror">
                    <option value="F" @selected(old('person_type',$client->person_type ?? 'F') == 'F')>Pessoa Física</option>
                    <option value="J" @selected(old('person_type',$client->person_type ?? '') == 'J')>Pessoa Jurídica</option>
                </select>
                @error('person_type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">CPF / CNPJ <span class="text-danger">*</span></label>
                <input type="text" name="document" class="form-control @error('document') is-invalid @enderror" value="{{ old('document',$client->document ?? '') }}">
                @error('document')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-5 mb-3">
                <label class="form-label">Nome / Razão Social <span class="text-danger">*</span></label>
                <input type="text" name="name" maxlength="255" class="form-control @error('name') is-invalid @enderror" value="{{ old('name',$client->name ?? '') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Nome Fantasia</label>
                <input type="text" name="trade_name" class="form-control" value="{{ old('trade_name',$client->trade_name ?? '') }}">
            </div>

        </div>
    </div>
</div>

{{-- ===========================
    CONTATO
=========================== --}}
<div class="card shadow-sm mb-4">
    <div class="card-header"><strong>📞 Contatos</strong></div>

    <div class="card-body">
        <div class="row">

            <div class="col-md-4 mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email',$client->email ?? '') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone',$client->phone ?? '') }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Celular</label>
                <input type="text" name="mobile" class="form-control" value="{{ old('mobile',$client->mobile ?? '') }}">
            </div>

        </div>
    </div>
</div>

{{-- ===========================
    ENDEREÇO
=========================== --}}
<div class="card shadow-sm mb-4">
    <div class="card-header"><strong>📍 Endereço</strong></div>

    <div class="card-body">
        <div class="row">

            <div class="col-md-3 mb-3">
                <label class="form-label">CEP</label>
                <input type="text" name="zip_code" class="form-control" value="{{ old('zip_code',$client->zip_code ?? '') }}">
            </div>

            <div class="col-md-7 mb-3">
                <label class="form-label">Endereço</label>
                <input type="text" name="address" class="form-control" value="{{ old('address',$client->address ?? '') }}">
            </div>

            <div class="col-md-2 mb-3">
                <label class="form-label">Número</label>
                <input type="text" name="number" class="form-control" value="{{ old('number',$client->number ?? '') }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Bairro</label>
                <input type="text" name="district" class="form-control" value="{{ old('district',$client->district ?? '') }}">
            </div>

            <div class="col-md-5 mb-3">
                <label class="form-label">Cidade</label>
                <input type="text" name="city" class="form-control" value="{{ old('city',$client->city ?? '') }}">
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">UF</label>
                <input type="text" name="state" maxlength="2" class="form-control" value="{{ old('state',$client->state ?? '') }}">
            </div>

        </div>
    </div>
</div>

<div class="collapse" id="advancedFields">

    {{-- ===========================
        FISCAL
    =========================== --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header"><strong>🧾 Dados Fiscais</strong></div>

        <div class="card-body">
            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Inscrição Estadual</label>
                    <input type="text" name="state_registration" class="form-control" value="{{ old('state_registration',$client->state_registration ?? '') }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Inscrição Municipal</label>
                    <input type="text" name="municipal_registration" class="form-control" value="{{ old('municipal_registration',$client->municipal_registration ?? '') }}">
                </div>

            </div>
        </div>
    </div>

    {{-- ===========================
        FINANCEIRO
    =========================== --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header"><strong>💰 Financeiro</strong></div>

        <div class="card-body">
            <div class="row">

                <div class="col-md-4 mb-3">
                    <label class="form-label">Limite de Crédito</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="number" step="0.01" min="0" name="credit_limit" class="form-control" value="{{ old('credit_limit',$client->credit_limit ?? 0) }}">
                    </div>
                </div>

                <div class="col-md-8 mb-3">
                    <label class="form-label">Observações</label>
                    <textarea name="notes" rows="3" class="form-control">{{ old('notes',$client->notes ?? '') }}</textarea>
                </div>

            </div>
        </div>
    </div>

</div>

{{-- ===========================
    STATUS
=========================== --}}
<div class="card shadow-sm mb-4">
    <div class="card-header"><strong>⚙️ Controle</strong></div>

    <div class="card-body">
        <input type="hidden" name="active" value="0">

        <div class="form-check">
            <input type="checkbox" name="active" value="1" class="form-check-input" @checked(old('active',$client->active ?? true))>
            <label class="form-check-label">Cliente ativo</label>
        </div>
    </div>
</div>