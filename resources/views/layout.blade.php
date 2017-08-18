<html>
    <head>
        <title>Test Site BRO >> @yield('title', 'the testerino')</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        @section('footer')
            FOOTER DUUUUUUDE
        @show
    </body>
</html>
