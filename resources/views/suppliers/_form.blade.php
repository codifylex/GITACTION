{{-- Dados Gerais --}}
<div class="card mb-4">
    <div class="card-header">
        <strong>Dados Gerais</strong>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-3 mb-3">
                <label for="type" class="form-label">Tipo <span class="text-danger">*</span></label>

                <select
                    name="type"
                    id="type"
                    class="form-select @error('type') is-invalid @enderror"
                    required>

                    <option value="">Selecione...</option>
                    <option value="PF" {{ old('type', $supplier->type ?? '') == 'PF' ? 'selected' : '' }}>
                        Pessoa Física
                    </option>
                    <option value="PJ" {{ old('type', $supplier->type ?? '') == 'PJ' ? 'selected' : '' }}>
                        Pessoa Jurídica
                    </option>

                </select>

                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Nome / Razão Social <span class="text-danger">*</span></label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name', $supplier->name ?? '') }}"
                    required>

                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="document" class="form-label">CPF/CNPJ <span class="text-danger">*</span></label>

                <input
                    type="text"
                    id="document"
                    name="document"
                    class="form-control @error('document') is-invalid @enderror"
                    value="{{ old('document', $supplier->document ?? '') }}"
                    required>

                @error('document')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label for="state_registration" class="form-label">Inscrição Estadual</label>

                <input
                    type="text"
                    id="state_registration"
                    name="state_registration"
                    class="form-control @error('state_registration') is-invalid @enderror"
                    value="{{ old('state_registration', $supplier->state_registration ?? '') }}">

                @error('state_registration')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-2 d-flex align-items-end mb-3">
                <div class="form-check">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="active"
                        name="active"
                        value="1"
                        {{ old('active', $supplier->active ?? true) ? 'checked' : '' }}>

                    <label class="form-check-label" for="active">
                        Ativo
                    </label>

                </div>
            </div>

        </div>

    </div>
</div>

{{-- Contato --}}
<div class="card mb-4">
    <div class="card-header">
        <strong>Contato</strong>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-4 mb-3">
                <label for="email" class="form-label">E-mail</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email', $supplier->email ?? '') }}">

                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="phone" class="form-label">Telefone</label>

                <input
                    type="text"
                    id="phone"
                    name="phone"
                    class="form-control @error('phone') is-invalid @enderror"
                    value="{{ old('phone', $supplier->phone ?? '') }}">

                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="mobile" class="form-label">Celular</label>

                <input
                    type="text"
                    id="mobile"
                    name="mobile"
                    class="form-control @error('mobile') is-invalid @enderror"
                    value="{{ old('mobile', $supplier->mobile ?? '') }}">

                @error('mobile')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>

    </div>
</div>

{{-- Endereço --}}
<div class="card mb-4">
    <div class="card-header">
        <strong>Endereço</strong>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-3 mb-3">
                <label for="zip_code" class="form-label">CEP</label>

                <input
                    type="text"
                    id="zip_code"
                    name="zip_code"
                    class="form-control @error('zip_code') is-invalid @enderror"
                    value="{{ old('zip_code', $supplier->zip_code ?? '') }}">

                @error('zip_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-7 mb-3">
                <label for="address" class="form-label">Endereço</label>

                <input
                    type="text"
                    id="address"
                    name="address"
                    class="form-control @error('address') is-invalid @enderror"
                    value="{{ old('address', $supplier->address ?? '') }}">

                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-2 mb-3">
                <label for="number" class="form-label">Número</label>

                <input
                    type="text"
                    id="number"
                    name="number"
                    class="form-control @error('number') is-invalid @enderror"
                    value="{{ old('number', $supplier->number ?? '') }}">

                @error('number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label for="complement" class="form-label">Complemento</label>

                <input
                    type="text"
                    id="complement"
                    name="complement"
                    class="form-control @error('complement') is-invalid @enderror"
                    value="{{ old('complement', $supplier->complement ?? '') }}">

                @error('complement')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="district" class="form-label">Bairro</label>

                <input
                    type="text"
                    id="district"
                    name="district"
                    class="form-control @error('district') is-invalid @enderror"
                    value="{{ old('district', $supplier->district ?? '') }}">

                @error('district')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="city" class="form-label">Cidade</label>

                <input
                    type="text"
                    id="city"
                    name="city"
                    class="form-control @error('city') is-invalid @enderror"
                    value="{{ old('city', $supplier->city ?? '') }}">

                @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-1 mb-3">
                <label for="state" class="form-label">UF</label>

                <input
                    type="text"
                    id="state"
                    name="state"
                    maxlength="2"
                    class="form-control @error('state') is-invalid @enderror"
                    value="{{ old('state', $supplier->state ?? '') }}">

                @error('state')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>

    </div>
</div>