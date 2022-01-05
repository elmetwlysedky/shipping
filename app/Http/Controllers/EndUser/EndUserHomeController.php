<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\EndUserHomeInterface;
use Illuminate\Http\Request;

class EndUserHomeController extends Controller
{
    private $homeInterface;

    public function __construct(EndUserHomeInterface $endUserHome)
    {
        $this->homeInterface = $endUserHome;
    }

    public function index()
    {
        return $this->homeInterface->homePage();
    }

    public function priceOrder()
    {
        return $this->homeInterface->priceOrder();
    }

    public function testimonial()
    {
        return $this->homeInterface->testimonial();
    }
}
