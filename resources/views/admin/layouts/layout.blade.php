<!doctype html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog - Painel administrativo</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>

    <script src="{{ asset('js/font-awesome-all.min.js') }}"></script>
    <link href="{{ asset('css/sbadmin.css') }}" rel="stylesheet">
</head>
<body class="sb-nav-fixed">
    
    @include('admin.topbar')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                @include('admin.sidebar')
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}" rel="stylesheet"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" rel="stylesheet"></script>
    <script src="{{ asset('js/sbadmin.js') }}" rel="stylesheet"></script>
</body>
</html>
