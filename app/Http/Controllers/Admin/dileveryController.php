<?php

namespace App\Http\Controllers\Admin;
use App\Http\Interfaces\Admin\dileveryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDileveryRequest;
use App\Http\Requests\UpdateRecordsDileveryRequest;
use App\Http\Requests\UpdateDileveryRequest ;
class dileveryController extends Controller
{
    private $dilevery;

    public function __construct(dileveryInterface $type)
    {
        $this->dilevery = $type;
    }

    public function index(){

        return $this->dilevery->index();
    }

    public function create(){

        return $this->dilevery->create();
    }

    public function store(StoreDileveryRequest $request){
     
        return $this->dilevery->store($request);
    }
    
    public function activated(Request $request){

        
        return $this->dilevery->activated($request);
    }
    public function activatedII(Request $request){

        return $this->dilevery->activatedII($request);
    }

    public function edit($id){

    return $this->dilevery->edit($id);

    }

    public function record(){

        return $this->dilevery->record();
    
        }

        public function records(UpdateRecordsDileveryRequest $Count){

            return $this->dilevery->records($Count);
        }

        public function update(UpdateDileveryRequest $request){
    
            return $this->dilevery->update($request);
        }
        public function destroy( $id){
            return $this->dilevery->destroy($id);

        }
}
