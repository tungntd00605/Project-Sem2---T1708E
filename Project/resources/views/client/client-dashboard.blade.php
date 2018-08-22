<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('mdb/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/client-dashboard.css')}}">
</head>
<body class="fixed-sn light-blue-skin">

<!--Double navigation-->
<header>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light waves-effect waves-light">
                    <a href="#"><img src="{{asset('mdb/img/logo.png')}}" class="img-fluid flex-center"></a>
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
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> My library<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect"><i class="fas fa-file"> My File</i></a>
                                </li>
                                <li><a href="#" class="waves-effect"><i class="fas fa-folder"> My Folder</i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <p>User Manager</p>
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a class="nav-link "><i class="fas fa-file-upload"></i>
                    <span class="clearfix d-none d-sm-inline-block" data-toggle="modal" data-target="#elegantModalForm">Upload File</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-folder"></i>
                    <span class="clearfix d-none d-sm-inline-block">New Folder</span>
                </a>
                {{--Tạo 1 dropdown cho phần thêm mới 1 folder--}}
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <form class="px-4 py-3" action="" method="post">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Created Folder</label>
                            <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Name Folder">
                        </div>
                        <button class="" name="">Created Folder</button>
                    </form>
                </div>
                {{--Dropdown create Folder--}}
            </li>
            <li class="nav-item">
                <a class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
            </li>
        </ul>
    </nav>
</header>
{{--Tạo 1 modal cho phần upload 1 file--}}
{{--Modal create file--}}
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
            <!--Header-->
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Create File</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body mx-4">
                <!--Body-->
                <form action="" method="post">
                    <div class="md-form mb-5">
                        <input type="text" id="Form-email1" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="Form-email1"></label>
                    </div>
                    <div class="md-form mb-5">
                        <span class="btn btn-default btn-file">
                        Choose file<input type="file" id="input-file">
                    </span>
                        <span class="text-muted" id="file-name"></span>
                    </div>
                    <div class="text-center mb-3">
                        <button type="submit" class="btn blue-gradient btn-rounded z-depth-1a">Upload File</button>
                        <button type="reset" class="btn blue-gradient btn-rounded z-depth-1a">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<main>
    <div class="container-fluid mt-5 row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10 row">
            <div class="col-md-2">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view">
                        <img src="{{asset('mdb/img/PDF-logo.png')}}" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <a class="card-title"><strong>File 1. pdf</strong></a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <div class="col-md-2">
                <!--Card-->
                <div class="card card-cascade">

                    <!--Card image-->
                    <div class="view view-cascade">
                        <img src="{{asset('mdb/img/PDF-logo.png')}}" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <!--Title-->
                        <a class="card-title"><strong>File 1. pdf</strong></a>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <!--Card-->
                <div class="card card-cascade">

                    <!--Card image-->
                    <div class="view view-cascade">
                        <img src="{{asset('mdb/img/PDF-logo.png')}}" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <!--Title-->
                        <a class="card-title"><strong>File 2. pdf</strong></a>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <!--Card-->
                <div class="card card-cascade">

                    <!--Card image-->
                    <div class="view view-cascade">
                        <img src="{{asset('mdb/img/PDF-logo.png')}}" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <!--Title-->
                        <a class="card-title"><strong>File 3. pdf</strong></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<!--Main Layout-->

</body>
</nav>
<script src="{{asset('mdb/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/bootstrap.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
<script !src="">
    $(".button-collapse").sideNav();
    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    Ps.initialize(sideNavScrollbar);

    $('input[type="file"]').change(function () {
        var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
        $("#file-name").text(fileName);
    });
</script>

</body>
</html>