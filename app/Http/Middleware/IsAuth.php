<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAuth
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            return $next($request);
        }else{
            echo "Редактировать товары могут только авторизованные пользователи.";
            exit;
        }
    }
}
