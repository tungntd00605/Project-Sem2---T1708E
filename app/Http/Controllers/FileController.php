<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
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
        $list_obj = File::get();
        return view('file/list-file')->with('list_obj',$list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file/file-upload-form');
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
            $lengName = substr($fileName,-3);
            $fileLink= $request->file->storeAs('public/upload',$fileName);
            $files= new File();
            $files->name = $fileName;
            $files->fileType =$lengName;
            $files->tagId = '1' ;
//           Input::get('tagId');
            $files->folderId = '1';
//                Input::get('folderId');
            $files->userId= '1';
//                Input::get('userId');
            $files->link=$fileLink;
            $files->path=$fileLink;
            $files->size= $request->file->getSize();
            $files->save();
            return redirect('file/list');

        }
//        return $request->all();
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
        return view('')
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
        return view('file/edit-file')
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
        $files = File::find($id);
        if($files == null){
            return response()->json(['msg' => 'Not found'], 404);
        }else{
            if ($request->hasFile('file')){
                $fileName = $request->file->getClientOriginalName();
                $lengName = substr($fileName,-3);
                $fileLink= $request->file->storeAs('public/upload',$fileName);
                $files->name=$fileName;
                $files->fileType =$lengName;
                $files->link=$fileLink;
                $files->path=$fileLink;
                $files->size= $request->file->getSize();
                $files->save();
                return redirect('file/list-file');
            }
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
            return response('Bakery not found or has been deleted!', 404);
        }
        $obj->delete();
        return redirect('file/list');
    }
}
