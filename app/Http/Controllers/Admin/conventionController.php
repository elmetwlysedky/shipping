<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Convention;
use Illuminate\Http\Request;
use App\Http\Requests\updateconventionRequest;
use App\Http\Requests\addconventionRequest;
use App\Http\Interfaces\Admin\conventionInterface;

class conventionController extends Controller
{
    private $conventionInterface;

    public function __construct(conventionInterface $pram)
    {
        $this->conventionInterface=$pram;
    }

    public function index()
    {
        return $this->conventionInterface->index();
    }

    public function create()
    {
        return $this->conventionInterface->create();
    }


    public function store(addconventionRequest $request)
    {
        return $this->conventionInterface->store($request);
    }


    public function show()
    {
    }


    public function edit($id)
    {
        return $this->conventionInterface->edit($id);

    }


    public function update(updateconventionRequest $request, $id)
    {
        return $this->conventionInterface->update($request , $id);
    }

    
    public function destroy($id)
    {
        return $this->conventionInterface->destroy($id);
    }
}
