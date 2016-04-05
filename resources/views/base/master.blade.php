<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/navbar.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/footer.css') }}" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @yield('moreStyles')
</head>
<body>
    @yield('header')
    @yield('navbar')
    <div>
        @yield('content')
    </div>
    @yield('footer')
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    @yield('moreScripts')
</body>
</html>