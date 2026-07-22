<div class="row">

    <div class="col-md-6 mb-3">
        <label for="name" class="form-label">Nome <span class="text-danger">*</span></label>

        <input
            type="text"
            name="name"
            id="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $unit->name ?? '') }}"
            required>

        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-3 mb-3">
        <label for="symbol" class="form-label">Símbolo <span class="text-danger">*</span></label>

        <input
            type="text"
            name="symbol"
            id="symbol"
            maxlength="20"
            class="form-control @error('symbol') is-invalid @enderror"
            value="{{ old('symbol', $unit->symbol ?? '') }}"
            style="text-transform: uppercase"
            required>

        @error('symbol')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-3 mb-3 d-flex align-items-end">
        <div class="form-check">
            <input
                type="checkbox"
                class="form-check-input"
                id="active"
                name="active"
                value="1"
                {{ old('active', $unit->active ?? true) ? 'checked' : '' }}>

            <label class="form-check-label" for="active">
                Ativa
            </label>
        </div>
    </div>

</div>

<div class="mb-3">

    <label for="description" class="form-label">
        Descrição
    </label>

    <textarea
        name="description"
        id="description"
        rows="4"
        class="form-control @error('description') is-invalid @enderror">{{ old('description', $unit->description ?? '') }}</textarea>

    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

</div>