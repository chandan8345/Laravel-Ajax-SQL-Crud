<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class myController extends Controller
{
    public function index(){
        return view('welcome');
    }
    
    public function create(Request $req){
        $user=new User;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->phone=$req->input('phone');
        $user->address=$req->input('address');
        $user->save();
        return "create";
    }
    public function update(Request $r){
        User::where('id',$r->id)->update($r->all());
    }
    public function remove(Request $r){
        User::where('id',$r->id)->delete();
    }
    public function removeAll(){
        User::delete();
    }
}
