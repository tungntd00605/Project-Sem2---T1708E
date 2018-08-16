@extends('layout.admin-master-layout', ['currentPage' => 'file-list'])
@section('page-title', 'Add file - Admin Page')
@section('content')

<div class="col-lg-4 col-md-6    mb-4 container">
    <!--Card-->
    <div class="card">
        <!--Card content-->
        <div class="card-body">
            <!-- Register form -->
            <form>
                {{csrf_field()}}
                <p class="h5 text-center mb-4">Add File</p>

                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-pass" class="form-control" name="user-id">
                    <label for="orangeForm-pass">User</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="text" id="orangeForm-email" class="form-control" name="tag-id">
                    <label for="orangeForm-email">Tag</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-folder prefix grey-text"></i>
                    <input type="text" id="orangeForm-pass" class="form-control" name="user-id">
                    <label for="orangeForm-pass">Folder</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-link prefix grey-text"></i>
                    <input type="text" id="orangeForm-pass" class="form-control" name="link">
                    <label for="orangeForm-pass">Link share</label>
                </div>
                <div class="md-form">
                    <span class="btn btn-default btn-file">
                        Choose file<input type="file" id="input-file">
                    </span>
                    <span class="text-muted" id="file-name"></span>
                </div>

                <div class="mt-4">
                    <button class="btn btn-info">Create New File <i class="fa fa-paper-plane-o ml-1"></i></button>
                    <button class="btn btn-info">Reset</button>
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
<!--Custom scripts-->
<script type="text/javascript" src="{{asset('js/add-file.js')}}"></script>

@endsection