<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UnusualuserController extends Controller
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role != 'player') {
            return $next($request);
        } else {
            return redirect('/home');
        }
    }

    public function checkPermission($needle)
    {
        if (Auth::user()->role == $needle) {
            return true;
        } else {
            return false;
        }
    }
}
