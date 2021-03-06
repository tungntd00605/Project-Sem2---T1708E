@extends('layout.admin-master-layout', ['currentPage' => 'file-list'])
@section('page-title', 'Add user - Admin Page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">
                <!--Form with header-->
                <form action="/admin/user" method="post">
                    {{csrf_field()}}
                    <div class="card wow fadeIn" data-wow-delay="0.3s">
                        <div class="card-body">

                            <!--Header-->
                            <div class="form-header purple-gradient">
                                <h3><i class="fa fa-user mt-2 mb-2"></i> Register:</h3>
                            </div>

                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-envelope prefix white-text"></i>
                                <input type="text" id="orangeForm-email" class="form-control" name="email">
                                <label for="orangeForm-email">Email</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-lock prefix white-text"></i>
                                <input type="password" id="orangeForm-pass" class="form-control" name="password">
                                <label for="orangeForm-pass">Your password</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-lock prefix white-text"></i>
                                <input type="password" id="orangeForm-pass" class="form-control" name="confirm-pw">
                                <label for="orangeForm-pass">Confirm password</label>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn purple-gradient btn-lg">Create New User</button>
                                <button type="reset" class="btn purple-gradient btn-lg">Reset</button>
                                <hr>
                            </div>

                        </div>
                    </div>
                </form>
                <!--/Form with header-->
            </div>
        </div>
    </div>



    <script src="{{asset('mdb/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('mdb/js/bootstrap.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>

@endsection