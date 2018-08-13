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
    <link rel="stylesheet" href="{{asset('css/add-file.css')}}">
</head>
<body>
<br/>
<div class="col-lg-4 col-md-6 mb-4 container">
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
<script type="text/javascript" !src="">
    $('input[type="file"]').change(function () {
        var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
        $("#file-name").text(fileName);
    });
</script>
</body>
</html>