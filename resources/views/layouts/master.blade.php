<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Request::route()->getName() }}</title>

    <link rel="icon" href="https://cdn.worldvectorlogo.com/logos/laravel.svg">
    @section('styles')
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    @show
</head>
<body>
    <header>
        @section('header')
            TITEL
        @show
    </header>

    <nav>
        <div class="nav__content">
            @section('navigation')
                @include('partials.nav')
            @show
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer></footer>
</body>
</html>
