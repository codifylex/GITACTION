<x-guest-layout>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">
                    📦 Estoque ERP
                </h1>

                <p class="text-muted">
                    Sistema de Gestão de Estoque
                </p>

            </div>

            <div class="card shadow border-0">

                <div class="card-body p-5">

                    <h3 class="text-center mb-4">
                        Entrar no Sistema
                    </h3>

                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label">
                                E-mail
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                                required
                                autofocus>

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Senha
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                required>

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="form-check mb-4">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="remember">

                            <label
                                class="form-check-label"
                                for="remember">

                                Lembrar-me

                            </label>

                        </div>

                        <button
                            class="btn btn-primary w-100 py-2">

                            Entrar

                        </button>

                        @if (Route::has('password.request'))

                            <div class="text-center mt-3">

                                <a href="{{ route('password.request') }}">
                                    Esqueci minha senha
                                </a>

                            </div>

                        @endif

                    </form>

                </div>

            </div>

            <div class="text-center mt-4 text-muted">

                © {{ date('Y') }} Estoque ERP

            </div>

        </div>

    </div>

</div>

</x-guest-layout>