<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>

        @include('layouts.partials._navbar')


    </header>
    <main>
    <div>
        @yield('main-content')
    </div>
    </main>
    <footer> @include('layouts.partials._footer')</footer>
</body>
</html>