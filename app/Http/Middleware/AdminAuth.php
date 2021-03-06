<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AdminAuth extends Middleware
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

        $user = Auth::user();

        if (!$user) {

            return  Redirect::back();

        }
        return $next($request);
    }

}
