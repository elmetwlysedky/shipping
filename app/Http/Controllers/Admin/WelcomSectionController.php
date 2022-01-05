<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Interfaces\Admin\SectionTags\WelcomeInterface ;
use App\Http\Requests\strorWelcomeSectionRequest;
use App\Http\Requests\UpdateWelcomeSectionRequest;
class WelcomSectionController extends Controller
{
    private $Welcome;

    public function __construct(WelcomeInterface $inject)
    {
        $this->Welcome = $inject;
    }

    public function index()
    {
        return  $this->Welcome->index();

    }

    public function create()
    {
        return  $this->Welcome->create();

    }
 
    public function store(strorWelcomeSectionRequest $request){


        return  $this->Welcome->store($request);
    }

    public function edit($id){

        return  $this->Welcome->edit($id);
    }

    public function update(UpdateWelcomeSectionRequest $request){

     
        return  $this->Welcome->update($request);

    }

    public function IsDisplayActive($id , $bool){

        return  $this->Welcome->IsDisplayActive($id , $bool);
    }
    public function destroy($id){

        return  $this->Welcome->destroy($id);

    }
}
