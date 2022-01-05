<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\DriverLoginRequest;
use Illuminate\Support\Facades\Auth;


class DriverController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(DriverLoginRequest $request)
    {
            if($request->authenticate()){

                $request->session()->regenerate();

                return redirect()->intended(RouteServiceProvider::DRIVER);
            }
            else{

                return redirect()->back()->withErrors(['name'=>(trans('Dashboard\auth.failed'))]);
            }


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request)
    {
        Auth::guard('driver')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }
}
