<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;

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
        return view('admin.create-folder-form');
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
        return response()->json(['item' => $obj], 200);
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
            return response()->json(['msg' => 'Not found'], 404);
        }
        $obj->name = Input::get('name');
        $obj->parentId = Input::get('parentId');
        $obj->userId = Input::get('userId');
        $obj->createdAt = Input::get('createdAt');
        $obj->updatedAt = Input::get('updateAt');
        $obj->status = Input::get('status');
        $obj->save();
        return response()->json(['item' => $obj]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Folder::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->parentId = Input::get('parentId');
        $obj->userId = Input::get('userId');
        $obj->updatedAt = Input::get('updateAt');
        $obj->status = Input::get('status');
        if (Input::hasFile('images')) {
            $image_id = time();
            Cloudder::upload(Input::file('images')->getRealPath(), $image_id);
            $obj->images = Cloudder::secureShow($image_id);
        }
        $obj->save();
        return response()->json(['item' => $obj], 200, 'Success to update folder.');
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
        $obj->delete();
        $obj->status = 0;
        return response()->json(['item' => $obj], 200, 'Success to delete folder.');
    }
}
