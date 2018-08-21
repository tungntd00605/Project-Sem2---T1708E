<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = File::all();
        return view('admin.file.list')->with('list_obj',$list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.file.add-file-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')){
            $fileName = $request->file->getClientOriginalName();
            $extension = $request->file->getClientOriginalExtension();
            $fileLink = $request->file->storeAs('public/upload',$fileName);

            $obj= new File();
            $obj->name = $fileName;
            $obj->fileType =$extension;
            $obj->tagId = $request->input('tag-id') ;
            $obj->folderId = $request->input('folder-id');
            $obj->userId= $request->input('user-id');
            $obj->link= $request->input('link');
            $obj->path=$fileLink;
            $obj->size= $request->file->getSize();
            $obj->save();
            return redirect('/admin/file');
        }
        else{
            return response()->json(['msg' => 'Upload file not found'], 404);
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
        $obj = File::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.file.show')
            ->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = File::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.file.edit-file-form')
            ->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Input::get('id');
        $obj = File::find($id);
        if($obj == null){
            return response()->json(['msg' => 'File not found'], 404);
        }
        if ($request->hasFile('file')){
            $fileName = $request->file->getClientOriginalName();
            $extension = $request->file->getClientOriginalExtension();
            $fileLink = $request->file->storeAs('public/upload',$fileName);

            $obj= new File();
            $obj->name = $fileName;
            $obj->fileType =$extension;
            $obj->tagId = $request->input('tag-id') ;
            $obj->folderId = $request->input('folder-id');
            $obj->userId= $request->input('user-id');
            $obj->link= $request->input('link');
            $obj->path=$fileLink;
            $obj->size= $request->file->getSize();
            $obj->save();
            return redirect('/admin/file');
        }
        else{
            return response()->json(['msg' => 'Upload file not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = File::find($id);
        if ($obj == null){
            return view('404');
        }
        $obj->status = 0;
        if($obj->save()){
            return response()->json(['msg'=>'Success to delete file'], 200);
        }
    }
}
