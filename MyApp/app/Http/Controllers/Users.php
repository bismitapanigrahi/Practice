<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    function dbQueries() {
        // return DB::select("select * from customers");

        // return DB::table('customers')
        // ->where('country', 'Mexico')
        // ->get();

        // return DB::table('customers')->count();

        // return DB::table('shippers')
        // ->insert(
        //     [
        //         'shipper_name' => "Shipping Packages",
        //         'phone' => '(506)234-5034'
        //     ]
        //     );

        // return DB::table('shippers')
        // ->where('shipperid', 4)
        // ->update(
        //     [
        //         'phone' => '(506) 239-5034'
        //     ]
        //     );

        // return DB::table('shippers')
        // ->where('shipperid', 4)->delete();

        // $data = DB::table('customers')->get();
        // return view('table', ['data'=>$data]);

        $data = DB::table('customers')->paginate(5);
        return view('table', ['data'=>$data]);

        // return DB::table('products')->avg('price');

        // return DB::table('orders')
        // ->join('orderdetails', 'orders.orderid', '=', 'orderdetails.orderid')
        // // ->select('orders.*')
        // ->where('orders.orderid', 10254)
        // ->get();
    }

    function upload(Request $request) {
        return $request->file('UploadedFile')->store('Docs'); //C:\Work\MyApp\storage\app\Docs
    }
}
