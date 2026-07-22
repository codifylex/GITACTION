<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ config('app.name') }}
        @isset($title)
            - {{ $title }}
        @endisset
    </title>

    <!-- Ícone na aba do navegador -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo_icon.svg') }}">

    <!-- Bootstrap Icons para deixar os menus mais visuais -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Navbar Clara e Limpa (bg-white com borda inferior) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm py-2">
        <div class="container-fluid px-lg-4">

            <!-- Logo + Nome do Sistema -->
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-primary"
                href="{{ route('dashboard') }}">
                <img src="{{ asset('images/logo_icon.svg') }}" alt="Estoque360" width="32" height="32">
                <span>{{ config('app.name', 'Estoque360') }}</span>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <!-- Links Principais -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-medium">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-1" href="{{ route('dashboard') }}">
                            <i class="bi bi-speedometer2"></i> Resumo
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-1" href="#"
                            data-bs-toggle="dropdown">
                            <i class="bi bi-folder-plus"></i> Cadastros
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm mt-2">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2"
                                    href="{{ route('categories.index') }}">
                                    <i class="bi bi-tags text-muted"></i> Categorias
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2"
                                    href="{{ route('brands.index') }}">
                                    <i class="bi bi-bookmark text-muted"></i> Marcas
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2"
                                    href="{{ route('units.index') }}">
                                    <i class="bi bi-aspect-ratio text-muted"></i> Unidades
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2"
                                    href="{{ route('suppliers.index') }}">
                                    <i class="bi bi-truck text-muted"></i> Fornecedores
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2"
                                    href="{{ route('products.index') }}">
                                    <i class="bi bi-box text-muted"></i> Produtos
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- Área do Usuário -->
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2 text-dark fw-semibold"
                            href="#" data-bs-toggle="dropdown">
                            <!-- Ícone de Perfil -->
                            <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 32px; height: 32px;">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <span>{{ auth()->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm mt-2">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item d-flex align-items-center gap-2 text-danger">
                                        <i class="bi bi-box-arrow-right"></i> Sair do Sistema
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="container py-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="bg-white border-top py-3 mt-auto text-center text-muted small">
        © {{ date('Y') }} {{ config('app.name', 'Estoque360') }} - Todos os direitos reservados.
    </footer>

    @stack('scripts')

</body>

</html>
