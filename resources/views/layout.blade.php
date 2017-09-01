<html>
    <head>
        <title>@yield('title', 'the testerino')</title>
        <link rel="stylesheet" href="{{ elixir('css/main.css') }}">
    </head>
    <body>
        <div class="nav">
            <h1 class="radical"><<<<<<<<<< 😎 COOOOOOOL NAV 😎 >>>>>>></h1>
            <hr>
        </div>
        <div class="container">
            @if ($errors->any())
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
            <h1 class="radical">
                <<<<<<<<<< 😎 SWEET FOOTER 😎 >>>>>>>
            </h1>
        @show
    </body>
</html>
