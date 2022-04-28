<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index($name) {
        // echo "Hello <b>$user</b> <br>from Controller";
        return view("hello",['name'=>$name]);
    }

    function viewLoad() {
        $data=["Rashi", "Ravi", "Ram"];
        return view("about", ['users'=>$data]);
    }
    
    function testRequest(Request $req) {
        $req->validate([
            'username'=>'required',
            'password'=>'required | min:6'
        ]);
        return $req->input();
    }
}
