<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{


    function index(Request $request){

        /*$data  = ['id'=>'1233', 'name'=>'alamin'];
    	return view('home.index', $data);*/

        /*return view('home.index')
                ->with('name', 'alamin')
                ->with('id', '1233');*/

        /*return view('home.index')
                ->withName('alamin')
                ->withId('1233');*/

        /*$v = view('home.index');
        $v->withName('alamin');
        $v->withId('1234');
        return $v;*/
        $user=new User();
            //$users=DB::table('users')->get();
            $users=$user->all();
            return view('home.index')->with('users',$users);



    }

    function details($id){
        //$users=$this->getStudentList();
        //$user=$users[$this->arraySearch($users,'id',$id)];
        $user=User::find($id);
        return view('home.details')->with('user',$user);
    }

    function create(){
       // $user = new User();
        //$user->
        return view('home.create');
    }

    function store(Request $request){

        /* $validate  = Validator::make($request->all(), [
            'username'  => 'required|max:5',
            'name'      => 'required',
            'password'  => 'required',
            'type'      => 'required',
            'cgpa'      => 'required'
        ]);
        if($validate->fails()){
            //return redirect()->route('home.create')
                               // ->with('errors', $validate->errors())
                                //->withInput();
            return back()
                    ->with('errors', $validate->errors())
                    ->withInput();
        }*/


        /*  $this->validate($request, [
              'username'  => 'required|max:5',
              'name'      => 'required',
              'password'  => 'required',
              'type'      => 'required',
              'cgpa'      => 'required'
          ])->validate();*/

        $request->validate([
            'username'=>'required|max:5',
            'name'=>'required',
            'password'=>'required',
            'type'=>'required',
            'cgpa'=>'required'
        ])->validate();

        $user = new User();
        $user->name=$request->name;
        $user->username=$request->username;
        $user->password=$request->password;
        $user->type=$request->type;
        $user->dept=$request->dept;
        $user->cgpa=$request->cgpa;
        $user->save();
        return redirect().route('home.index');
    }

    function edit($id){
        $user=User::find($id);
        //print_r($user);
        return view('home.edit')->with('user',$user);

    }

    function update($id, Request $request){

        //$newUser = ['id'=>$id, 'name'=>$request->name,'email'=>$request->email, 'password'=>$request->password];

        //$users = $this->getStudentList();

        //$key=$this->arraySearch($users,'id',$id);
        //$users[$key]=$newUser;

        //User::where('userId',$id)->update($request);
        $user=User::find($id);
        $user->name=$request->name;
        $user->username=$request->username;
        $user->password=$request->password;
        $user->type=$request->type;
        $user->dept=$request->dept;
        $user->cgpa=$request->cgpa;
        $user->save();
        return redirect()->route('home.index');

    }

    function delete($id){
        //$users=$this->getStudentList();
        //$user=$users[$this->arraySearch($users,'id',$id)];
        $user=User::find($id);
        return view('home.delete')->with('user',$user);

    }

    function destroy($id, Request $request){

       if(User::destroy($id)){
           return redirect()->route('home.index');
       }
       else{
           return redirect()-route('home.delete',$id);
       }
        //unset($users[$key]);

        return redirect('/home');
    }

    function arraySearch($array, $field, $search){
        foreach($array as $key => $value){
            if ($value[$field] === $search)
                return $key;
        }
        return false;
    }

    function getStudentList(){
        return  [
            ['id'=>'1', 'name'=>'alamin','email'=>'abc@gmail.com', 'password'=>'123'],
            ['id'=>'2', 'name'=>'abc','email'=>'abc@aiub.com', 'password'=>'456'],
            ['id'=>'3', 'name'=>'xyz','email'=>'xyz@gmail.com', 'password'=>'789']
        ];
    }
}
