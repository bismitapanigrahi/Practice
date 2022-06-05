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
        $members = DB::table('registered_members')->paginate(3);
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
            'firstname' => 'required',
            'email' => 'required',
            'mobile' => 'required | regex:/^([0-9\s\-\+\(\)]*)$/ | digits:10',
            'gender' => 'required',
            'dob' => 'required',
            'address' => 'required'
        ]);
        DB::table('registered_members')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phno' => $request->mobile,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address' => $request->address,
            'qualification' => $request->qualification,
            'profession' => $request->profession,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        return redirect('create')->with('status', 'User added!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
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
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        return redirect('edit')->with('status', 'User details updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $is_deleted = DB::table('registered_members')->where('id', $id)->first()->is_deleted;
        if($is_deleted){
            DB::table('registered_members')->where('id', $id)->update([
                'is_deleted' => 0,
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
        } else {
            DB::table('registered_members')->where('id', $id)->update([
                'is_deleted' => 1,
                'deleted_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
        }
        return redirect('listUsers')->with('status', 'Status Changed!');
    }
}
