<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Http\Requests\contactRequest;
use App\Http\Interfaces\Admin\contactInterface;

class contactController extends Controller
{
    private $contactInterface;

    public function __construct(contactInterface $pram)
    {
        $this->contactInterface=$pram;
    }

    public function index()
    {
        return $this->contactInterface->index();
    }


    public function create()
    {
        return $this->contactInterface->create();
    }

    public function store(contactRequest $request)
    {
        return $this->contactInterface->store($request);
    }


    public function show($id)
    {
        return $this->contactInterface->show($id);
    }




    public function destroy($id)
    {
        return $this->contactInterface->destroy($id);
    }
}
