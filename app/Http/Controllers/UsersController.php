<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Users;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('users.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $this->validate($request,array(
            'signUsername' => 'required',
            'signEmail' => 'required',
            'signMobileNumber' => 'required',
            'signPassword' => 'required',
            'admin' => 'required'
        ));
        
            $users = Users::all();
            if($users)
            if($request->admin == '0')
            {
                $resp['status']="good";
                return response()->json($resp);
            }
            $users = new Users;
            $users->name = $request->signUsername;
            $users->email = $request->signEmail;
            $users->mobileNumber = $request->signMobileNumber;
            $users->password = md5($request->signPassword);
            $users->save();
        $resp['status']="success";
        return response()->json($resp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $users = Users::all();
        return view('users.show')->with('users',$users);
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
        //
        $id = $request->id;
        $users = Users::find($id);
        $users->name = $request->signUsername;
        $users->email = $request->signEmail;
        $users->mobileNumber = $request->signMobileNumber;
        $users->save();
        $resp['status']="success";
        return response()->json($resp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        //
        Users::find($req->id)->delete();
        $resp['status']="success";
        return response()->json($resp);
    }
}
