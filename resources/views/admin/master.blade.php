<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/simple-sidebar.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('moreStyles')
</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Admin ReviewKu
                </a>
            </li>
            <li>
                <a href="{{ route('admin.movies.index') }}">Film</a>
            </li>
            <li>
                <a href="{{ route('admin.reviews.index') }}">Ulasan</a>
            </li>
            <li>
                <a href="{{ route('admin.feedback') }}">Saran</a>
            </li>
            <br/>
            <br/>
            <br/>
            <li>
                <a href="{{ route('logout') }}"><i  style="left: -10%;" class="fa fa-power-off" aria-hidden="true"></i>
                    Logout</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <a href="#menu-toggle" class="fa fa-bars" id="menu-toggle"></a>
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

@yield('moreScripts')

</body>

</html>
