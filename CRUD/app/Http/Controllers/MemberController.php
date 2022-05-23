<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = DB::table('registered_members')->get();
        return view('listUsers', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate ([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required | regex:/^([0-9\s\-\+\(\)]*)$/ | digits:10'
        ]);
        DB::table('registered_members')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phno' => $request->mobile,
        ]);
        return redirect('listUsers')->with('status', 'User Added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = DB::table('registered_members')->find($id);
        return view ('edit', ['member' => $member]);
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
        $request->validate ([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required | regex:/^([0-9\s\-\+\(\)]*)$/ | digits:10'
        ]);
        DB::table('registered_members')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phno' => $request->mobile,
        ]);
        return redirect('listUsers')->with('status', 'User Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('registered_members')->where('id', $id)->delete();
        return redirect('listUsers')->with('status', 'User Deleted');
    }
}
