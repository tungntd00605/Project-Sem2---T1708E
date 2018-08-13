<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = User::all();
        return view('admin.user.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add-user-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new User();
        $obj->email = Input::get('email');
        $obj->password = Input::get('password');
        if($obj->save()){
            return response()->json(['msg' => 'Register Success'], 200);
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
        $obj = User::find($id);
        if($obj == null){
            return view('404');
        }
        return view('admin.user.show')->with('obj', $obj);
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
        $obj = User::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.user.edit-user-form')
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
        $obj = User::find($id);
        if($obj == null){
            return view('404');
        }
        $obj->password = Input::get('password');
        if ($obj->save()){
            return response()->json(['msg'=>'Success to update password'], 200);
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
        $obj = User::find($id);
        if ($obj == null){
            return view('404');
        }
        $obj->status = 0;
        if($obj->save()){
            return response()->json(['msg'=>'Success to delete user account'], 200);
        }
    }
}
