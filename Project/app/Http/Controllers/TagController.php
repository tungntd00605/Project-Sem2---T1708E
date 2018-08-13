<?php

namespace App\Http\Controllers;

use App\File;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Tag::all();
        return view('admin.tag.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create-tag-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Tag();
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        if (Input::hasFile('images')) {
            $image_id = time();
            Cloudder::upload(Input::file('images')->getRealPath(), $image_id);
            $obj->image = Cloudder::secureShow($image_id);
        }
        if($obj->save()){
            return response()->json(['msg' => 'Success to create new tag'], 200);
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
        $obj = Tag::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.tag.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
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
        return view('admin.file.edit-tag')
            ->with('obj', $obj);
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
        $obj = Tag::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        if (Input::hasFile('images')) {
            $image_id = time();
            Cloudder::upload(Input::file('images')->getRealPath(), $image_id);
            $obj->images = Cloudder::secureShow($image_id);
        }
        $obj->save();
        return response()->json(['msg'=>'Success to update tag'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Tag::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->status = 0;
        if($obj->save()){
            return response()->json(['msg'=>'Success to delete tag'], 200);
        }
    }
}
