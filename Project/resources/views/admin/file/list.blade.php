@extends('layout.admin-master-layout', ['currentPage' => 'file-list'])
@section('page-title', 'List User - Admin Page')
@section('content')

    <!-- Editable table -->
    <div class="card">
        <div class="card-header elegant-color align-middle ">
            <div class="white-text float-left"><h1>File table</h1></div>
            <a href="/admin/file/create">
                <button type="button" class="btn btn-yellow waves-effect waves-light float-right ml-auto">Upload new
                </button>
            </a>
        </div>
        @if(count($list_obj)>0)
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
                            <th>File type</th>
                            <th>Tag Id</th>
                            <th>Folder Id</th>
                            <th>User Id</th>
                            <th>Size</th>
                            <th>Link</th>
                            <th>Path</th>
                            <th>View Count</th>
                            <th>Download Count</th>
                            <th>Status</th>
                            <th width="10%" colspan="2">Action</th>
                        </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                        @foreach($list_obj as $obj)
                            <tr>
                                <td>
                                    <div class="form-check float-left">
                                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                        <label class="form-check-label" for="materialUnchecked"></label>
                                    </div>
                                </td>
                                <td>{{$obj->id}}</td>
                                <td>{{$obj->name}}</td>
                                <td>{{$obj->fileType}}</td>
                                <td>{{$obj->tagId}}</td>
                                <td>{{$obj->folderId}}</td>
                                <td>{{$obj->userId}}</td>
                                <td>{{$obj->size}}</td>
                                <td>{{$obj->link}}</td>
                                <td>{{$obj->path}}</td>
                                <td>{{$obj->viewCount}}</td>
                                <td>{{$obj->downloadCount}}</td>
                                <td>{{$obj->status}}</td>
                                <td>
                                    <a class="btn-floating light-green"><i class="fa fa-pencil"></i></a>
                                </td>
                                <td>
                                    <a class="btn-floating red"><i class="fa fa-remove"></i></a>
                                </td>
                            </tr>
                        @endforeach
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
        @else
            <h1>Khong co gi ca</h1>
        @endif
    </div>
    <!-- SCRIPTS -->

    <!--Custom scripts-->
@endsection