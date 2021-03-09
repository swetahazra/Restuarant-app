<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\restuarant;
use App\User ;
use App\Image ;
use Session;
use Crypt ;

class Retrocontroller extends Controller
{
    //
    function index()
    {
        return view('home');

    }
    function list()
    {
        $data = restuarant::all();
        return view('list',["data"=>$data]);
    }
    function add(Request $req){
        
        $restro = new restuarant;
        $restro->id=$req->input('id');
        $restro->name=$req->input('name');
        $restro->email=$req->input('email');
        $restro->address=$req->input('address');
        $restro->save();

        $req->session()->flash('status','Restuarant submitted succesfully');
        return redirect('list');
    }
    function delete($id)
    {
        restuarant::find($id)->delete();
        Session::flash('status','Restuarant deleted succesfully');
        return redirect('list');
    }
    function edit($id)
    {
        $data= restuarant::find($id);
        return view('edit',['data'=>$data]);

    }
    function update(Request $req){
        
        $restro = restuarant::find($req->input('id'));
        $restro->id=$req->input('id');
        $restro->name=$req->input('name');
        $restro->email=$req->input('email');
        $restro->address=$req->input('address');
        $restro->save();

        $req->session()->flash('status','Restuarant updated succesfully');
        return redirect('list');
    }
    function register(Request $req)
    {
        $user = new User ;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=Crypt::encrypt($req->input('password'));
        $user->contact=$req->input('contact');
        $user->save();
        $req->session()->put('user',$req->input('name'));
        return redirect('/');

    }
    function login(Request $req)
    {
        $user = User::where("email",$req->input('email'))->get();
        if(Crypt::decrypt($user[0]->password)==$req->input('password'))
        {
            $req->session()->put('user',$user[0]->name);
            $req->session()->put('Euser',$user[0]->email);
            $req->session()->put('Cuser',$user[0]->contact);
            return redirect('/');
        }
    }
    function profile()
    {
        $data = User::all();
        return view('profile',["data"=>$data]);
       
    }
    function upload(Request $req)
    {
        $req->file('user_img')->store('public');
        return redirect('/');
    }
   
}



