<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authcheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // if(!session()->has('LoggedBizz')&&($request->path() !='login' && $request->path() !='register')){
        //     return redirect('login')->with('fail','you must be logged in');
        // }

        // if(session()->has('LoggedBizz') && ($request->path() == 'login' || $request->path() == 'register')){
        //     return back();
        // }



        if(!session()->has('LoggedUser')&&($request->path() !='login' && $request->path() !='register')){
            return redirect('login')->with('fail','you must be logged in');
        }

        if(session()->has('LoggedUser') && ($request->path() == 'login' || $request->path() == 'register')){
            return back();
        }
        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
