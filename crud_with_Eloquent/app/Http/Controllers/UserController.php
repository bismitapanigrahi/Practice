<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registered_User;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Registered_User::paginate(5);
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
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required | regex:/^([0-9\s\-\+\(\)]*)$/ | digits:6'
        ]);
        $member = new Registered_User;
        $member->firstname = $request->firstname;
        $member->lastname = $request->lastname;
        $member->email = $request->email;
        $member->phno = $request->mobile;
        $member->gender = $request->gender;
        $member->dob = $request->dob;
        $member->address = $request->address;
        $member->city = $request->city;
        $member->state = $request->state;
        $member->zip = $request->zip;
        $member->qualification = $request->qualification;
        $member->profession = $request->profession;
        // $member->created_at = Carbon::now();
        $member->save();
        return redirect()->back()->with('status', 'User added!');
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
        $member = Registered_User::find($id);
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
            'firstname' => 'required',
            'email' => 'required',
            'mobile' => 'required | regex:/^([0-9\s\-\+\(\)]*)$/ | digits:10',
            'gender' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required | regex:/^([0-9\s\-\+\(\)]*)$/ | digits:6'
        ]);
        $member = Registered_User::find($id);
        $member->firstname = $request->firstname;
        $member->lastname = $request->lastname;
        $member->email = $request->email;
        $member->phno = $request->mobile;
        $member->gender = $request->gender;
        $member->dob = $request->dob;
        $member->address = $request->address;
        $member->city = $request->city;
        $member->state = $request->state;
        $member->zip = $request->zip;
        $member->qualification = $request->qualification;
        $member->profession = $request->profession;
        $member->save();
        return redirect()->back()->with('status', 'User details updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $is_deleted = Registered_User::find($id)->is_deleted;
        if($is_deleted){
            $member = Registered_User::find($id);
            $member->is_deleted = 0;
            $member->save();
        } else {
            $member = Registered_User::find($id);
            $member->is_deleted = 1;
            $member->deleted_at = now();
            $member->save();
        }
        return redirect()->back()->with('status', 'Status changed!');
    }
}
