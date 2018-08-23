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
<div class="col-lg-4 col-md-6 mb-4 container">
    <!--Card-->
    <div class="card">
        <!--Card content-->
        <div class="card-body">
            <!-- Register form -->
            <form action="/admin/tag" method="post">
                @method('PUT')
                {{csrf_field()}}
                <p class="h5 text-center mb-4">Tag Edit</p>
                {{--@foreach()--}}
                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-pass" class="form-control" name="user-id">
                    <label for="orangeForm-pass">Name Tag</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-align-left prefix grey-text"></i>
                    <input type="text" id="orangeForm-email" class="form-control" name="description">
                    <label for="orangeForm-email">Description</label>
                </div>

                <div class="md-form">
                    <span class="btn btn-default btn-file">
                        Choose file<input type="file" id="input-file" name="file">
                    </span>
                    <span class="text-muted" id="file-name"></span>
                </div>

                {{--@endforeach--}}
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Edit Tag <i class="fa fa-paper-plane-o ml-1"></i></button>
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
<script type="text/javascript" src="{{asset('js/edit-tag.js')}}"></script>
</body>
</html>