<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle(Request $request, Closure $next)
    {


            if (auth('web')->check()) {
                return redirect(RouteServiceProvider::HOME);
            }

            if (auth('admin')->check()) {
                return redirect(RouteServiceProvider::ADMIN);
            }
            if (auth('driver')->check()) {
                return redirect(RouteServiceProvider::DRIVER);
            }
            if (auth('scanner')->check()) {
                return redirect(RouteServiceProvider::SCANNER);
            }
            if (auth('warehousing_officer')->check()) {
                return redirect(RouteServiceProvider::WAREHOUSE);
            }


        return $next($request);
    }
}
