<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Users;

class HandleLoginController extends Controller
{
    //
    function handle(Request $request){
        $this->validate($request,array(
            'email' => 'required',
            'password' => 'required',
        )); 
        $email = $request->email;
        $users = Users::where('email', $email) -> first();
        if($users){
            if($users->password == md5($request->password)){
            session_start();
            $_SESSION["login"] = "parsec";
            header('Location: /users/show');
            exit;
            }
        }
        header('Location: /admin');
        exit;
    }
    function logout(Request $request){
            session_start();
            session_destroy();
            header('Location: /admin');
            exit;
    }
    function store(Request $request){
        $this->validate($request,array(
            'signUsername' => 'required',
            'signEmail' => 'required',
            'signMobileNumber' => 'required',
            'signPassword' => 'required',
        )); 
        
            $users = Users::all();
            if($users->count()>0)
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
            header('Location: /admin');
            exit;
    }
}
