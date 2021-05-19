<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use App\User;


class peerinkwell_show_pages extends Controller
{
    public function index (){

        return view('peerinkwell_files.home_page');


    }

public function homePage (){

        return view('peerinkwell_files.home_page_2');


    }

public function sign_in_page (){

        return view('peerinkwell_files.sign_in_page');


    }
public function homepage_2 (){

        return view('peerinkwell_files.home_page_3');


    }

public function homepage_3 (){

        return view('peerinkwell_files.home_page_4');


    }
public function contact (){

        return view('peerinkwell_files.contact');


    }
public function blog (){

        return view('peerinkwell_files.blog');


    }

public function About (){

        return view('peerinkwell_files.about');


    }

public function sign_up_page (){

        return view('peerinkwell_files.sign_up_page');


    }

public function user_profile (){

    return view('peerinkwell_files.user_profile');


}


public function edit_user_profile (){

    return view('peerinkwell_files.edit_user_profile');


}

public function Login (Request $request){

        $request->validate([

            'email' => 'required|email'  ,
            'password' => 'required|min:6',


        ]);

        $email  = $request->input('email');

        $password = $request->input('password');

        $result = DB::select('select * from users where email= ?', [$email]);

        foreach($result as $results){

        if(Auth::attempt(['email' => $email, 'password' => $password])){


            session()->flash('success_message', 'welcome to our site'.' , '.$results->name);

            return redirect(route('homepage'));


        }

        else{

            session()->flash('failed_message', 'failed to login in');

            return redirect(route('sign_up'));


        }
    }

    }




    public function  store_user_demande(Request $request){

     	 $request->validate([

            'name' => 'required|max:14|unique:peerinkwell_updates' ,
            'email' => 'required|email|unique:peerinkwell_updates'


        ], [

            'name.required' => 'name is required' ,
            'email.required' => 'email is required' ,
            'email.email' => 'must be valid email',
            'name.unique' => 'name already be taken',
            'email.unique' => 'email already be taken'

        ]);

        $name = $request->input('name');

        $email = $request->input('email');


	DB::insert('insert into peerinkwell_updates (name , email) values (? ,?)' , [$name , $email]);


        session()->flash('success_message' , 'All site updates will send to you soon');


        return  redirect()->back();


    }

    public function logOut (){

        Auth::logout();

        return redirect(route('sign_in'));


    }

    public function edit_password(Request $request , $id){

        $request->validate([

            'password' => 'required|min:6' ,
            'confirm' => 'same:password'

        ]);

        $hash_password  = Hash::make($request->input('password'));

        $updated = User::where('id' , $id)->update([

            'password' => $hash_password


        ]);

        if($updated){

            session()->flash('password_edited' , 'password edited successully');

            return redirect()->back();


        }


    }

    public function edit_image(Request $request , $id){


        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg'

        ]);

        if($request->hasFile('image')){

            $image = $request->file('image');
            $image_extension = $image->getClientOriginalExtension();
            $image_name = time().'.'.$image_extension;

            $image->move(public_path('images/') ,$image_name);


            $updated = User::where('id' , $id)->update([


                'image' => $image_name


            ]);

            if($updated){


                 session()->flash('image_edited' ,'image edited successfully');

                 return redirect()->back();

            }


        }


    }

}
