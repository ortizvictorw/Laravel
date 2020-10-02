
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>
    <title>
        @yield('title')
    </title>

</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between ">
        <header>
            @include('partials/nav')
            @include('partials.session-status')
        </header>

        <main class="py-3">
            @yield('content')
        </main>
        <footer class="bg-white text-black-50 py-3 text-center">
            {{config('app.name')}} | Copyright @ {{date('Y')}}
        </footer>
    </div>
</body>
</html>
