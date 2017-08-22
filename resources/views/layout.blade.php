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
            @if ($errors->any())
                {{ var_dump($errors->all()) }}
                <ul id="errors">
                    @foreach ($errors->all() as $error)
                        <li style="color:red;font-weight:bold;">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            @yield('content')
        </div>
        @section('footer')
            <hr>
            FOOTER DUUUUUUDE MCCORDINATOR DOT COOOOOOOOOOOOOOOOOOOOOOOOL 😎
        @show
    </body>
</html>
