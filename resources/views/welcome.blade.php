<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Estoque ERP</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">

            <a class="navbar-brand fw-bold" href="/">
                📦 Estoque ERP
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

                    <a href="{{ route('register') }}" class="btn btn-outline-light">
                        Registrar
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

                <div class="col-lg-6 text-center">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/263/263142.png"
                        class="img-fluid"
                        style="max-width:350px">

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

    <footer class="bg-dark text-white py-4">

        <div class="container text-center">

            © {{ date('Y') }} Estoque ERP

        </div>

    </footer>

</body>

</html>