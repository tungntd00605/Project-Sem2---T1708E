@extends('layout.admin-master-layout', ['currentPage' => 'tag-list'])
@section('page-title', 'Add Tag - Admin Page')
@section('content')
<link rel="stylesheet" href="{{asset('css/add-tag.css')}}">
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
                    <span class="btn btn-default btn-file">
                        Choose file<input type="file" id="input-file" name="file">
                    </span>
                    <span class="text-muted" id="file-name"></span>
                </div>

                <div class="card" hidden="true"
                     id="preview-img"
                     style="background-size: cover; width: 140px; height: 80px;">
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Create New Tag <i class="fa fa-paper-plane-o ml-1"></i></button>
                    <button type="reset" class="btn btn-primary">Reset</button>
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
<script type="text/javascript" src="{{asset('js/add-tag.js')}}"></script>
@endsection