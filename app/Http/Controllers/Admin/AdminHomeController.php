<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminHomeInterface;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    private $homeInterFace;

    public function __construct(AdminHomeInterface $adminHome)
    {
        $this->homeInterFace = $adminHome;
    }

    public function index()
    {
        return $this->homeInterFace->homePage();
    }
}
