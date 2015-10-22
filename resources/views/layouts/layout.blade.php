<html>
    <head>
        <title>Aplicação 3 - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body id="admin">
        <header>
            @include('layouts.header')
        </header>

        <main class="container">

            @include('layouts.errors')

            @include('layouts.flash-messages')


            @yield('content')

        </main>

        <footer>
            @include('layouts.footer')
        </footer>
    </body>
    <script src="{{ elixir('js/all.js') }}"></script>


</html>