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
    <div class="card">
        <div class="card-body">
            <a href="/file/store" class="btn float-right"><i class="fas fa-plus-circle"></i> Create new File</a>
            <table class="table table-striped">
                <thead>
                    <tr class="row">
                        <th class="col-md-1">Id</th>
                        <th class="col-md-2">Name</th>
                        <th class="col-md-1">UserId</th>
                        <th class="col-md-1">TagID</th>
                        <th class="col-md-2">FolderID</th>
                        <th class="col-md-1">Size</th>
                        <th class="col-md-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list_obj as $item)
                        <tr class="row" id="row-item-{{$item->id}}">
                            <td class="col-md-1">{{$item->id}}</td>
                            <td class="col-md-2">{{$item->name}}</td>
                            <td class="col-md-1">{{$item->userId}}</td>
                            <td class="col-md-1">{{$item->tagId}}</td>
                            <td class="col-md-2">{{$item->folderId}}</td>
                            <td class="col-md-1">{{$item->size}} B</td>
                            <td class="col-md-2">
                                <a href="edit/{{$item->id}}">Edit</a>
                                <a href="#" id="{{$item->id}}" class="btn-delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        var listDeleteButton = document.getElementsByClassName('btn-delete');
        for (var i = 0; i < listDeleteButton.length; i++) {
            listDeleteButton[i].onclick = function () {
                if(confirm('Are you sure ?')){
                    var params = '_token={{csrf_token()}}';
                    var currentId = this.id;
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "destroy/" + currentId, true);
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            alert('Delete success!');
                            window.location.reload();
                        }
                    };
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(params);
                }
            }
        }
    </script>
</body>
</html>