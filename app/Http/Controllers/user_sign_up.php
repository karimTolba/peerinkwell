<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;



class user_sign_up extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //make validation to user_information

        $request->validate([

            'name' => 'required|unique:users,name' ,
            'email' => 'required|email|unique:users,email' ,
            'password' => 'required|min:6' ,
            'confirm' => 'required|same:password'

        ]);


        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));


        $user = User::create([

            'name' => $name ,
            'email'=> $email ,
            'password' => $password

        ]);

        auth()->login($user);

        $result = DB::select('select * from users where name = ?', [$name]);

        foreach($result as $results){

            DB::insert('insert into role_user (user_id , role_id) values ( ? , ?)', [$results->id , 1]);

        }

        session()->flash('welcome_message' , 'Thank you joining to our family'.' , '.$name);

        return redirect()->back();

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
        //
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

        $request->validate([

            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'min:6',
            'confirm' => 'same:password'

        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $hash_password = Hash::make($password);

        $updated = User::where('id' , $id)->update([

            'name' => $name ,
            'email' => $email,
            'password' => $hash_password

        ]);

        if($updated){

            session()->flash('updated' , 'your information updated successfully');

            return redirect()->back();

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
