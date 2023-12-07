<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->isAdmin()){
            return $next($request);
        }else{
            abort(403);
        }
    }
}
