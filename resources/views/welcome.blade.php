<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Estoque360</title>

    <!-- Ícone da Aba do Navegador (Favicon) -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="/">
                <!-- Logo na Navbar (Ícone/Compacta) -->
                <img src="{{ asset('images/logo.svg') }}" 
                     alt="Estoque360 Logo" 
                     width="36" 
                     height="36" 
                     class="bg-white rounded-circle p-1">
                <span>Estoque360</span>
            </a>

            <div class="ms-auto">

                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-light">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-light me-2">
                        Entrar
                    </a>
                @endauth

            </div>

        </div>
    </nav>

    <section class="py-5">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <h1 class="display-4 fw-bold">
                        Sistema de Gestão de Estoque
                    </h1>

                    <p class="lead text-muted mt-4">

                        Controle completo do seu estoque,
                        compras, vendas, clientes,
                        fornecedores e fluxo de caixa
                        em um único sistema.

                    </p>

                    <div class="mt-4">

                        @auth

                            <a href="{{ route('dashboard') }}"
                               class="btn btn-primary btn-lg">

                                Acessar Dashboard

                            </a>

                        @else

                            <a href="{{ route('login') }}"
                               class="btn btn-primary btn-lg">

                                Entrar no Sistema

                            </a>

                        @endauth

                    </div>

                </div>

                <div class="col-lg-6 text-center mt-4 mt-lg-0">

                    <!-- Logo na Hero Section (Destaque Principal) -->
                    <img src="{{ asset('images/logo.svg') }}" 
                         alt="Estoque360 - Gestão Completa" 
                         class="img-fluid" 
                         style="max-width: 380px;">

                </div>

            </div>

        </div>

    </section>

    <section class="py-5 bg-white">

        <div class="container">

            <div class="row text-center">

                <div class="col-md-4">

                    <h3>📦 Estoque</h3>

                    <p>
                        Controle entradas, saídas,
                        transferências e inventário.
                    </p>

                </div>

                <div class="col-md-4">

                    <h3>💰 Vendas</h3>

                    <p>
                        Emissão de pedidos,
                        controle financeiro e recebimentos.
                    </p>

                </div>

                <div class="col-md-4">

                    <h3>🚚 Compras</h3>

                    <p>
                        Cadastro de fornecedores,
                        pedidos de compra e contas a pagar.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <footer class="bg-dark text-white py-4 mt-auto">

        <div class="container text-center">

            © {{ date('Y') }} Estoque360

        </div>

    </footer>

</body>

</html>