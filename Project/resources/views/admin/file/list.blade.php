<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('mdb/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">

    <!-- Your custom styles (optional) -->
    <style>
        .table {
            overflow-x: scroll;
        }
        th, td {
            width: 200px;
        }
    </style>
</head>

<body>
<!-- Editable table -->
<div class="card">
    <div class="card-header elegant-color align-middle">
        <div class="white-text float-left"><h1>File table</h1></div>
        <button type="button" class="btn btn-yellow waves-effect waves-light float-right ml-auto">Upload new</button>
    </div>
    <div class="card-body">
        <div id="table" class="table">
            <table class="table table-bordered table-striped text-center table-fixed table-sm">
                <tr>
                    <th></th>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">File type</th>
                    <th class="text-center">Tag Id</th>
                    <th class="text-center">Folder Id</th>
                    <th class="text-center">User Id</th>
                    <th class="text-center">Size</th>
                    <th class="text-center">Link</th>
                    <th class="text-center">Path</th>
                    <th class="text-center">View count</th>
                    <th class="text-center">Download count</th>
                    <th class="text-center">Created at</th>
                    <th class="text-center">Action</th>
                </tr>
                <tr>
                    <td scope="row">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked1">
                            <label class="form-check-label" for="materialUnchecked1"></label>
                        </div>
                    </td>
                    <td class="pt-3-half">01234</td>
                    <td class="pt-3-half">Text</td>
                    <td class="pt-3-half">.txt</td>
                    <td class="pt-3-half">01234</td>
                    <td class="pt-3-half">01234</td>
                    <td class="pt-3-half">01234</td>
                    <td class="pt-3-half">23 KB</td>
                    <td class="pt-3-half">youtube.com</td>
                    <td class="pt-3-half">C:\Users\av\Documents\Laravel</td>
                    <td class="pt-3-half">23</td>
                    <td class="pt-3-half">7</td>
                    <td class="pt-3-half">13/8/2018</td>
                    <td>
                        <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="align-middle">
        <div class="form-check float-left">
            <input type="checkbox" class="form-check-input" id="materialUnchecked_">
            <label class="form-check-label" for="materialUnchecked_"></label>
        </div>
        <select class="mdb-select" multiple title="Options">
            <option value="" disabled selected>Select</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
            <option value="5">Option 5</option>
        </select>
        <button type="button" class="btn btn-default btn-sm waves-effect waves-light ml-auto">Button</button>
    </div>
</div>

<!-- Editable table -->
</body>

</html>