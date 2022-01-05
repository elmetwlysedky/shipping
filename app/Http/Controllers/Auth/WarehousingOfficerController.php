<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\WarehouseLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WarehousingOfficerController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(warehouseLoginRequest $request)
    {
        if($request->authenticate()){

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::WAREHOUSE);
        }
        else{
            return redirect()->back()->withErrors(['name'=>(trans('Dashboard\auth.failed'))]);        }


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
        //
    }

    public function destroy(Request $request)
    {
        Auth::guard('warehousing_officer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }
}
