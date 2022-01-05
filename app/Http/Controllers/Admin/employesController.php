<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Interfaces\Admin\employessInterface;
use App\Http\Requests\StoreEmployesRequest;
use App\Http\Requests\UpdateEmployesRequest;
class employesController extends Controller
{
    private $employes;

    public function __construct(employessInterface $type)
    {
        $this->employes = $type;
    }

    public  function index()
    {
       return $this->employes->index();
    }
    public  function create()
    {
       return $this->employes->create();
    }

    public  function store(StoreEmployesRequest $request)
    {
       return $this->employes->store($request);
    }

    public function edit($id){

      return $this->employes->edit($id);


    }
    public function update(UpdateEmployesRequest $request)
    {
       

      return $this->employes->update($request);
    }

    public function IsDisplayActive($id , $bool)
    {
      return $this->employes->IsDisplayActive($id , $bool);

    }
    public function destroy( $id)
    {

      return $this->employes->destroy($id);
    }
}
