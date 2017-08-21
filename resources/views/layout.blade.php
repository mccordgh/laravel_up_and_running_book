<html>
    <head>
        <title>@yield('title', 'the testerino')</title>
    </head>
    <body>
        <div class="nav">
            <h1><<<<<<<<<< COOOOOOOL NAV >>>>>>></h1>
            <hr>
        </div>
        <div class="container">
            @yield('content')
        </div>
        @section('footer')
            <hr>
            FOOTER DUUUUUUDE
        @show
    </body>
</html>
