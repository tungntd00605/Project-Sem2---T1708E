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
        img {
            border-radius: 10px;
        }
    </style>
</head>

<body>
<!-- Editable table -->
<div class="card">
    <div class="card-header elegant-color align-middle ">
        <div class="white-text float-left"><h1>File table</h1></div>
        <button type="button" class="btn btn-yellow waves-effect waves-light float-right ml-auto">Upload new</button>
    </div>
    <div class="card-body">
        <div id="table" class="table table-responsive">
            <!--Table-->
            <table id="tablePreview" class="table table-striped table-sm table-bordered text-center">
                <!--Table head-->
                <thead>
                <tr>
                    <th width="5%"></th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th width="10%">Image</th>
                    <th width="10%" colspan="2">Action</th>
                </tr>
                </thead>
                <!--Table head-->
                <!--Table body-->
                <tbody>
                <tr>
                    <td>
                        <div class="form-check float-left">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                            <label class="form-check-label" for="materialUnchecked"></label>
                        </div>
                    </td>
                    <td>12345</td>
                    <td>Tag 1</td>
                    <td>This is a tag</td>
                    <td><img src="https://kbob.github.io/images/sample-1_thumb.jpg"> </td>
                    <td>
                        <a class="btn-floating light-green"><i class="fa fa-pencil"></i></a>
                    </td>
                    <td>
                        <a class="btn-floating red"><i class="fa fa-remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check float-left">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                            <label class="form-check-label" for="materialUnchecked"></label>
                        </div>
                    </td>
                    <td>12345</td>
                    <td>Tag 2</td>
                    <td>This is a tag</td>
                    <td><img src="https://kbob.github.io/images/sample-2_thumb.jpg"> </td>
                    <td>
                        <a class="btn-floating light-green"><i class="fa fa-pencil"></i></a>
                    </td>
                    <td>
                        <a class="btn-floating red"><i class="fa fa-remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check float-left">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                            <label class="form-check-label" for="materialUnchecked"></label>
                        </div>
                    </td>
                    <td>12345</td>
                    <td>Tag 3</td>
                    <td>This is a tag</td>
                    <td><img src="https://kbob.github.io/images/sample-3_thumb.jpg"> </td>
                    <td>
                        <a class="btn-floating light-green"><i class="fa fa-pencil"></i></a>
                    </td>
                    <td>
                        <a class="btn-floating red"><i class="fa fa-remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check float-left">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                            <label class="form-check-label" for="materialUnchecked"></label>
                        </div>
                    </td>
                    <td>12345</td>
                    <td>Tag 4</td>
                    <td>This is a tag</td>
                    <td><img src="https://kbob.github.io/images/sample-4_thumb.jpg"> </td>
                    <td>
                        <a class="btn-floating light-green"><i class="fa fa-pencil"></i></a>
                    </td>
                    <td>
                        <a class="btn-floating red"><i class="fa fa-remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check float-left">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                            <label class="form-check-label" for="materialUnchecked"></label>
                        </div>
                    </td>
                    <td>12345</td>
                    <td>Tag 5</td>
                    <td>This is a tag</td>
                    <td><img src="https://kbob.github.io/images/sample-5_thumb.jpg"> </td>
                    <td>
                        <a class="btn-floating light-green"><i class="fa fa-pencil"></i></a>
                    </td>
                    <td>
                        <a class="btn-floating red"><i class="fa fa-remove"></i></a>
                    </td>
                </tr>
                </tbody>
                <!--Table body-->
            </table>
            <!--Table-->
        </div>
    </div>

    <div class="align-middle gray-ic">
        <div class="form-check float-left">
            <input type="checkbox" class="form-check-input" id="materialUnchecked_">
            <label class="form-check-label" for="materialUnchecked_"></label>
        </div>
        <label>
            <select class="mdb-select mr-4 ml-1">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
        </label>
        <button type="button" class="btn btn-default btn-sm waves-effect waves-light ml-auto">Button</button>
    </div>
</div>
<!-- SCRIPTS -->
<!-- JQuery -->
<script src="{{asset('mdb/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/bootstrap.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
<!--Custom scripts-->
<script>
    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').material_select();
    });
</script>
<!-- Editable table -->
</body>

</html>