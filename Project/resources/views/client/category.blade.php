<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Category</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('mdb/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
    <style>
        h1 {
            font-size: 400%;
        }

        #sub-title {
            font-size: 150%;
        }

        .btn-add-file {
            position: absolute;
            top: 0%;
            right: 0%;
            background-color: #b1bace;
            border-radius: 5px;
            opacity: 0.8;
        }

        .btn-add-file:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
<!--Navbar-->
<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark elegant-color sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="mdb/img/logo.png" alt="" height="50">
            </a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse">

                <form class="form-inline my-2 my-lg-0 ml-auto">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
                </form>

                <a class="btn btn-info btn-rounded btn-sm waves-effect waves-light">Log In
                    <i class="fa fa-sign-in ml-2"></i>
                </a>

            </div>
            <!-- Navbar brand -->
        </div>
    </nav>

    <nav class="navbar navbar-expand-sm navbar-dark stylish-color sticky-top">
        <div class="container">
            <ul class="nav grey stylish-color">
                <li class="nav-item">
                    <a class="nav-link active white-text" href="#!">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white-text" href="#!">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white-text" href="#!">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled white-text" href="#!">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<main>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-image" style="background-image: url(http://blog.booksamillion.com/wp-content/uploads/2017/01/books-2.jpg);">
                <div class="text-white text-center py-5 px-4 my-5">
                    <div>
                        <h1 class="card-title pt-3 font-bold">
                            <strong>Explore</strong>
                        </h1>
                        <p class="mx-5 mb-5" id="sub-title">Check out the latest on all your favorite topics
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <!-- Section: Products v.3 -->
        <section class="text-center">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->

                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Shirt</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Sport wear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Sport wear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-2 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                            <button class="btn-floating  btn-add-file"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->


            </div>
            <!-- Grid row -->
            <hr>
        </section>
        <!-- Section: Products v.3 -->
    </div>


</main>








<!-- Footer -->
<footer class="page-footer font-small special-color pt-4">

    <!-- Footer Elements -->
    <div class="container">

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fa fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fa fa-google-plus"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fa fa-linkedin"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fa fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/bootstrap-tutorial/"> StudyShare.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->






<script src="mdb/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="mdb/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="mdb/js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="mdb/js/mdb.min.js"></script>
</body>

</html>