<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Study Share</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('mdb/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
    <style>
        #cloud-image {
            max-width: 60%;
            float: right;
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

    <div class="container dark-grey-text mt-5">

        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-6 mb-7">

                <img src="https://cdn4.iconfinder.com/data/icons/peppyicons/512/659937-download-512.png" class="img-fluid" alt="" id="cloud-image">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!--Content-->
                <div class="p-4">

                    <div class="mb-3">
                        <a href="">
                            <span class="badge purple mr-1">Tag 2</span>
                        </a>
                    </div>

                    <h2 class="lead font-weight-bold">File Name</h2>

                    <p>
                        <i class="fa fa-database mr-1"></i> 1.5 GB</p>

                    <p><i class="fa fa-user mr-1"></i> Uploaded By : minhnguyenduc</p>

                    <p><i class="fa fa-calendar mr-1"></i>Uploaded On : 10/10/2018</p>

                    <p class="lead">
                            <span>
                                <i class="fa fa-eye mr-1"></i>100,000 </span>
                        &nbsp; &nbsp;
                        <span>
                                <i class="fa fa-download mr-1"></i>100,000</span>

                    </p>



                    <form class="d-flex justify-content-left">
                        <button class="btn btn-primary btn-md my-0 p" type="submit">Download
                            <i class="fa fa-download ml-1"></i>
                        </button>
                        <button class="btn btn-primary btn-md my-0 p" type="submit">Live Preview
                            <i class="fa fa-eye ml-1"></i>
                        </button>

                    </form>

                </div>
                <!--Content-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr>


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