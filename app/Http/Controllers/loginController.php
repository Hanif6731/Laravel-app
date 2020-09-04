<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class loginController extends Controller{
    function index(){
        return view('login.index');
    }
    function verify(Request $request){

        /*  $request->session()->put('username', $request->username);
            $request->session()->put('password', $request->password);
            $request->session()->get('username');
            $request->session()->foget('username');
            $request->session()->flush();

            $request->session()->flash('msg', 'invalid user');
            $request->session()->flash('error', 'db error');
            $request->session()->get('msg');
            $request->session()->keep('msg');
            $request->session()->reflash();
            $request->session()->has('username');
            $request->session()->pull('username');*/

        //$user = new User();
        //$data = $user->all();
//        $data = $user->where('username',$request->username)
//            ->where('password',$request->password)
//            ->get();
        $data=DB::table('users')
            ->where('username',$request->username)
            ->where('password',$request->password)
            ->get();
        if(count($data)==1){
            $request->session()->put('username',$request->username);

            if($data[0]->type=='admin'){
                $request->session()->put('type','admin');
            }

            return redirect()->route('home.index');
        }else{
            $request->session()->flash('msg','invalid Credentials');
            return redirect()->route('login.index');
        }

    }
}
