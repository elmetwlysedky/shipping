<?php

namespace App\Http\Repositories\Admin\SectionTags;

use App\Http\Interfaces\Admin\SectionTags\WelcomeInterface ;
use App\Models\SWelcomeTitle;
use Illuminate\Http\Request;

class WelocmeRepository implements WelcomeInterface
{
    private $welcomeModel ;
    public function __construct(SWelcomeTitle $model)
    {
            return $this->welcomeModel = $model ;
    }


    public function index(){
     $welcome =   $this->welcomeModel::get();
        return view('Dashboard.WelcomeSection.index' ,compact('welcome'));

    }

    
    public function create(){

        return view('Dashboard.WelcomeSection.create');
    }

  
    public function store(Request $request){

       
        $this->welcomeModel::create($request->all());

        return redirect()->route('admin.welcome.index');

    }
    public function edit($id){

        $welcome = $this->welcomeModel::find($id);

        return view('Dashboard.WelcomeSection.edit',compact('welcome'));
    }
    public function update(Request $request){

        $data = $request->validated();

       $update =    $this->welcomeModel::find($request->welcomeId);
       if( $update != null){
        $update->update($data);
        return redirect()->route('admin.welcome.index');
      }
         
        
    }
    public function destroy($id){
        $deleted = $this->welcomeModel::find($id);
        if($deleted != null){
            $deleted->delete();
            return redirect()->back()->with('errors' ,'Deleted successfully'); 
        }
        return redirect()->back()->with('errors' ,'there is a problem This event is out of service'); 
    }


    public function IsDisplayActive($id , $bool)
    {
        if($bool != 1){

            $welcome = $this->welcomeModel::get();

            for($i=0 ; $i < count($welcome) ;$i++ ){

                if($welcome[$i]->id == $id){

                    $welcome[$i]-> is_active = 1;
                    $welcome[$i]->save();
                }elseif($welcome[$i]->id != $id){

                    $welcome[$i]-> is_active = 0;
                    $welcome[$i]->save();
                }  
            }


             return redirect()->back();
        }
        

       
        return redirect()->back()->with('errors' ,trans('Dashboard\WelcomeSection.IsDisplayActiveErrors')); 

    }


}