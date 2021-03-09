<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--Title--}}
    <title>@yield('title')</title>

    {{--Css--}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

    {{--Scripts--}}
    <script src="/js/jquery-3.5.1.min.js" defer></script>
    <script src="/js/bootstrap.min.js" defer></script>
    <script src="/js/main.js" defer></script>
</head>
<body>
<div class="wrapper">
    <header id="header" class="container">
        @yield('logo')
        @include('layout.menu')
    </header>
    <main class="container content">
        @yield('content')
    </main>
    <footer class="container">
        @include('layout.menu')
    </footer>
</div>
</body>
</html>
