@csrf

<div class="row">

    <div class="col-md-8 mb-3">

        <label for="name" class="form-label">
            Nome <span class="text-danger">*</span>
        </label>

        <input
            type="text"
            id="name"
            name="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $category->name ?? '') }}"
            maxlength="150"
            required>

        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="col-md-4 mb-3 d-flex align-items-end">

        <div class="form-check">

            <input
                class="form-check-input"
                type="checkbox"
                id="active"
                name="active"
                value="1"
                {{ old('active', $category->active ?? true) ? 'checked' : '' }}>

            <label
                class="form-check-label"
                for="active">

                Ativa

            </label>

        </div>

    </div>

</div>

<div class="mb-3">

    <label
        for="description"
        class="form-label">

        Descrição

    </label>

    <textarea
        id="description"
        name="description"
        rows="4"
        maxlength="500"
        class="form-control @error('description') is-invalid @enderror">{{ old('description', $category->description ?? '') }}</textarea>

    @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>

<div class="d-flex justify-content-between">

    <a
        href="{{ route('categories.index') }}"
        class="btn btn-secondary">

        Voltar

    </a>

    <button
        type="submit"
        class="btn btn-primary">

        Salvar

    </button>

</div>