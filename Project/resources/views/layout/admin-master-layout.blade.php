
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('mdb/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">

    <!-- Your custom styles (optional) -->
    <style>

    </style>
</head>

<body class="fixed-sn white-skin">

<!--Main Navigation-->
<header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li class="logo-sn waves-effect" style="height: 115px;">
                <div class="text-center">
                        <a href="#" class="pl-0"><img class="img-fluid" src="{{asset('mdb/img/logo.png')}}" class=""></a>
                </div>
            </li>
            <!--/. Logo -->

            <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group md-form mt-0 pt-1 waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a href="/admin/user" class="collapsible-header waves-effect"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="/admin/user" class="collapsible-header waves-effect {{$currentPage == 'user-list'?'active':''}}"><i class="fas fa-user"></i> Users Manager</a></li>
                    <li><a href="/admin/file" class="collapsible-header waves-effect {{$currentPage == 'file-list'?'active':''}}"><i class="fas fa-file"></i> Files Manager</a></li>
                    <li><a href="/admin/folder" class="collapsible-header waves-effect {{$currentPage == 'folder-list'?'active':''}}"><i class="fas fa-folder"></i> Folders Manager</a></li>
                    <li><a href="/admin/tag" class="collapsible-header waves-effect {{$currentPage == 'tag-list'?'active':''}}"><i class="fas fa-tags"></i> Tags Manager</a></li>
                    <li><a href="#" class="collapsible-header waves-effect"><i class="fas fa-cogs"></i> Settings Manager</a></li>
                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <p>Admin Dashboard</p>
        </div>

        <!--Navbar links-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

            <!-- Dropdown -->
            <li class="nav-item dropdown notifications-nav">
                <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <span class="badge red">3</span> <i class="fa fa-bell"></i>
                    <span class="d-none d-md-inline-block">Notifications</span>
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-money mr-2" aria-hidden="true"></i>
                        <span>New order received</span>
                        <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-money mr-2" aria-hidden="true"></i>
                        <span>New order received</span>
                        <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 33 min</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-line-chart mr-2" aria-hidden="true"></i>
                        <span>Your campaign is about to end</span>
                        <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 53 min</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Log Out</a>
                    <a class="dropdown-item" href="#">My account</a>
                </div>
            </li>

        </ul>
        <!--/Navbar links-->
    </nav>
    <!-- /.Navbar -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <section class="container-fluid">
        @section('content')
        @show
    </section>
</main>
<!--Main layout-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="{{asset('mdb/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/bootstrap.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
<!--Custom scripts-->
<script>
    $(document).ready(function () {
        // SideNav Initialization
        $(".button-collapse").sideNav();
        // Material Select Initialization
        $('.mdb-select').material_select();
    });

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
    });
</script>
</body>

</html>