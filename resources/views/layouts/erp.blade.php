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

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])

    @stack('styles')
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container-fluid">

            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
                {{ config('app.name') }}
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbar">

                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">
                            Categorias
                        </a>
                    </li>


                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item dropdown">

                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-bs-toggle="dropdown">

                            {{ auth()->user()->name }}

                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>

                                <form
                                    method="POST"
                                    action="{{ route('logout') }}">

                                    @csrf

                                    <button
                                        class="dropdown-item">

                                        Sair

                                    </button>

                                </form>

                            </li>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>
    </nav>

    <main class="container py-4">

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif

        @if(session('error'))

            <div class="alert alert-danger">

                {{ session('error') }}

            </div>

        @endif

        @yield('content')

    </main>

    @stack('scripts')

</body>

</html>