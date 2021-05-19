<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(Auth::check()){


            redirect(route('homepage'));

            return $next($request);
        }

        else{

            $message = 'login or signUp to be able to navigate';

            session()->flash('message' , $message);

            return redirect(route('sign_in'));

        }


    }
}
