<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Folder::all();
        return view('admin.folder.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.folder.create-folder-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Folder();
        $obj->name = Input::get('name');
        $obj->parentId = Input::get('parentId');
        $obj->userId = Input::get('userId');
        $obj->save();
        if($obj->save()){
            return response()->json(['msg' => 'Success to create new folder'], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Folder::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.folder.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
        $obj = Tag::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.folder.edit-folder')
            ->with('obj', $obj);
    }

    public function update(Request $request, $id)
    {
        $obj = Folder::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->parentId = Input::get('parentId');
        $obj->userId = Input::get('userId');
        $obj->save();
        return response()->json(['msg'=>'Success to update password'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Folder::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->status = 0;
        if($obj->save()){
            return response()->json(['msg'=>'Success to delete folder'], 200);
        }
    }
}
