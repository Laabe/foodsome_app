<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta10/dist/css/tabler.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css">
</head>

<body>
    <div id="app" class="theme-light">
        <div class="page {{ Request::routeIs('login') ? 'page-center' : '' }}">
            @auth
                <div class="sticky-top">
                    @include('admin_layouts.plugins.header')
                    @include('admin_layouts.plugins.navbar')
                </div>
                <div class="page-wrapper">
                    <div class="container-xl">
                        @include('admin_layouts.plugins.breadcrumb')
                        @yield('content')
                    </div>
                </div>
            @else
                <div class="container-tight py-4">
                    @yield('content')
                </div>
            @endauth

        </div>
    </div>

    <script src="https://unpkg.com/@tabler/core@1.0.0-beta10/dist/js/tabler.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    @yield('scripts')
</body>

</html>
