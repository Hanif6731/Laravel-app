<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class loginController extends Controller{
    function index(){
        return view('login.index');
    }
    function validation(Request $request){
        if($request->usename==$request->password);
        return redirect('/home');
    }
}
