@extends('layout.admin-master-layout', ['currentPage' => 'tag-list'])
@section('page-title', 'Add Tag - Admin Page')
@section('content')

<div class="col-lg-4 col-md-6 mb-4 container">
    <!--Card-->
    <div class="card">
        <!--Card content-->
        <div class="card-body">
            <!-- Register form -->
            <form action="/admin/tag" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <p class="h5 text-center mb-4">Add Tag</p>

                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-pass" class="form-control" name="name">
                    <label for="orangeForm-pass">Name Tag</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="text" id="orangeForm-email" class="form-control" name="description">
                    <label for="orangeForm-email">Description</label>
                </div>

                <div class="md-form">
                    <div class="file-field">
                        <div class="btn btn-default btn-sm float-left">
                            <span>Choose file</span>
                            <input type="file" name="image">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload your image" >
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button class="btn btn-primary">Create New Tag <i class="fa fa-paper-plane-o ml-1"></i></button>
                    <button class="btn btn-primary">Reset</button>
                </div>

            </form>
            <!-- Register form -->

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