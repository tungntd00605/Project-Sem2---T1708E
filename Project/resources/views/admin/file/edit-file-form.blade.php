<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('mdb/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
</head>
<body>
<br/>
<div class="col-lg-5 col-md-8 mb-4 container">
    <!--Card-->
    <div class="card">
        <!--Card content-->
        <div class="card-body">
            <!-- Register form -->
            <form action="admin/file/{{$obj->id}}" method="post">
                @method('PUT')
                {{csrf_field()}}
                <p class="h5 text-center mb-4" style="color: #0b51c5">Edit File</p>

                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" class="form-control disabled text-light" value="{{$obj->userId}}" name="file-upload-name">
                    <label for="orangeForm-pass">User</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" class="form-control" name="file-upload-name">
                    <label for="orangeForm-pass">Name File</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-file prefix grey-text"></i>
                    <input type="text" class="form-control disabled text-light" value="{{$obj->fileType}}" name="file-type" disabled>
                    <label for="orangeForm-email">Type File</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-file prefix grey-text"></i>
                    <input type="text" class="form-control disabled text-light" value="{{$obj->size}}" name="size" disabled>
                    <label> Size File</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-tag prefix grey-text"></i>
                    <input type="text" class="form-control" name="tag-id">
                    <label for="orangeForm-pass">Tag</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-folder prefix grey-text"></i>
                    <input type="text" class="form-control" name="folder-id">
                    <label for="orangeForm-pass">Folder</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-link prefix grey-text"></i>
                    <input type="text" class="form-control" name="link">
                    <label for="orangeForm-pass">Link</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-link prefix grey-text"></i>
                    <input type="text" class="form-control disabled text-light" value="{{$obj->path}}" name="path" disabled>
                    <label for="orangeForm-pass">Path</label>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Edit File <i class="fa fa-paper-plane-o ml-1"></i></button>
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
</body>
</html>