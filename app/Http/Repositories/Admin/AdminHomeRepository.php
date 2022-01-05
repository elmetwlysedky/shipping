<?php
namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminHomeInterface;

class AdminHomeRepository implements AdminHomeInterface
{

    public function homePage()
    {
        return view('Dashboard.Admin.index');
    }
}
