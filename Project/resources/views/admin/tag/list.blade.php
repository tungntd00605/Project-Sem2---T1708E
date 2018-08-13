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
        th, td {
            width: 200px;
        }
        img {
            width: 200px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
<!-- Editable table -->
<div class="card">
    <div class="card-header elegant-color align-middle fixed">
        <div class="white-text float-left"><h1>Tag table</h1></div>
        <button type="button" class="btn btn-red waves-effect waves-light float-right ml-auto">Upload new</button>
    </div>
    <div class="card-body">
        <div id="table" class="table">
            <table class="table table-bordered table-striped text-center table-fixed table-sm">
                <tr>
                    <th></th>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Image</th>
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
                    <td class="pt-3-half">Tag</td>
                    <td class="pt-3-half">This is a tag.</td>
                    <td class="pt-3-half"><img src="https://kbob.github.io/images/sample-5.jpg"></td>
                    <td>
                        <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked1">
                            <label class="form-check-label" for="materialUnchecked1"></label>
                        </div>
                    </td>
                    <td class="pt-3-half">01234</td>
                    <td class="pt-3-half">Tag2</td>
                    <td class="pt-3-half">This is a tag.</td>
                    <td class="pt-3-half"><img src="https://4.img-dpreview.com/files/p/E~TS590x0~articles/3925134721/0266554465.jpeg"></td>
                    <td>
                        <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked1">
                            <label class="form-check-label" for="materialUnchecked1"></label>
                        </div>
                    </td>
                    <td class="pt-3-half">01234</td>
                    <td class="pt-3-half">Tag3</td>
                    <td class="pt-3-half">This is a tag.</td>
                    <td class="pt-3-half"><img src="https://imaging.nikon.com/lineup/lens/zoom/normalzoom/af-s_dx_18-140mmf_35-56g_ed_vr/img/sample/sample1_l.jpg"></td>
                    <td>
                        <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked1">
                            <label class="form-check-label" for="materialUnchecked1"></label>
                        </div>
                    </td>
                    <td class="pt-3-half">01234</td>
                    <td class="pt-3-half">Tag4</td>
                    <td class="pt-3-half">This is a tag.</td>
                    <td class="pt-3-half"><img src="http://www.ricoh-imaging.co.jp/english/products/q-s1/ex/img/bod_mainImg_01.jpg"></td>
                    <td>
                        <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                </tr>
            </table>

        </div>
    </div>
    <div class="white-ic align-middle">
        <div class="form-check float-left">
            <input type="checkbox" class="form-check-input" id="materialUnchecked_">
            <label class="form-check-label" for="materialUnchecked_"></label>
        </div>
        <select class="mdb-select" multiple title="Options">
            <option value="" disabled selected>Choose your country</option>
            <option value="1">USA</option>
            <option value="2">Germany</option>
            <option value="3">France</option>
            <option value="4">Poland</option>
            <option value="5">Japan</option>
        </select>
        <button type="button" class="btn btn-default btn-sm waves-effect waves-light ml-auto">Button</button>
    </div>
</div>
<!-- Editable table -->
</body>

</html>
