@extends('layout.admin-master-layout', ['currentPage' => 'folder-list'])
@section('page-title', 'Add folder - Admin Page')
@section('content')

<div class="col-lg-4 col-md-6 mb-4 container">
    <!--Card-->
    <div class="card">
        <!--Card content-->
        <div class="card-body">
            <!-- Register form -->
            <form action="/admin/tag/store" method="post">
                {{csrf_field()}}
                <p class="h5 text-center mb-4">Add Folder</p>

                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-pass" class="form-control" name="user-id">
                    <label for="orangeForm-pass">User</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-folder prefix grey-text"></i>
                    <input type="text" id="orangeForm-pass" class="form-control" name="name">
                    <label for="orangeForm-pass">Name Folder</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-folder prefix grey-text"></i>
                    <input type="text" id="orangeForm-email" class="form-control" name="parent-id">
                    <label for="orangeForm-email">Perant</label>
                </div>

                <div class="mt-4">
                    <button class="btn btn-primary">Create New Folder <i class="fa fa-paper-plane-o ml-1"></i></button>
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