<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="form-group">
            <form action="/file/store" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{--<div class="form-control">--}}
                    {{--<label for="">TagId</label>--}}
                    {{--<input type="text" name="tagId">--}}
                {{--</div>--}}
                {{--<div class="form-control">--}}
                    {{--<label for="">FolderID</label>--}}
                    {{--<input type="text" name="tagId">--}}
                {{--</div>--}}
                {{--<div class="form-control">--}}
                    {{--<label for="">UserID</label>--}}
                    {{--<input type="text" name="tagId">--}}
                {{--</div>--}}
                {{--<input type="hidden" name="id">--}}
                <div class="form-control">
                    <input type="file" name="file">
                </div>
                <input type="submit" class="btn btn-upload">
            </form>
        </div>
    </div>
</body>
</html>