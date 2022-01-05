<?php

namespace App\Http\Repositories\Admin;
use Illuminate\Http\Request;
use App\Models\employe;
use App\Http\Interfaces\Admin\employessInterface;
use Illuminate\Support\Facades\File;
class employesRepository implements employessInterface
{
private $employeModel ;

    public function __construct(employe $model)
    {
        return $this-> employeModel = $model;

    }

    
    public function index()
    {
        $employe  = $this->employeModel::get();

        return view('Dashboard.employes.index',compact('employe'));
    }

    public function create()
    {

        return view('Dashboard.employes.create');
    }


    public function store(Request $request)
    {


            $filename  = null ;
            $existsPath = null ;

        if($request->file('imgs') != null){

            $filename  = time() . uniqid() . '.' . $request->file('imgs')->getClientOriginalExtension();
          
            
            $existsPath =   $request->file('imgs')->move(public_path('Dashboard\img\employes'),$filename);

        }

        if($filename != null)
        {
            
            $request->merge(array( 'img_url' =>$filename));

              if(File::exists($existsPath ))
               {
                   
           
                $this-> employeModel::create( $request->all());

            
                return redirect()->route('admin.employe.index');

               }

               
       }

       return redirect()->back()->with('errors' ,'This request is out of the event'); 
    }

    public function edit($id)
    {
        $employe = $this->employeModel::find($id);
         return view('Dashboard.employes.edit' ,compact('employe'));
    }

   
    public function update(Request $request)
    {

        $employe = $this->employeModel::find($request->employeId);
        if( $employe != null){

        if($request->file('imgs') != null)
        {


            $existsPath = public_path('Dashboard\img\employes\\'.$employe-> img_url);
            if(File::exists($existsPath))
            {
                File::delete($existsPath);
            }

            $filename  = time() . uniqid() . '.' . $request->file('imgs')->getClientOriginalExtension();
            $request->file('imgs')->move(public_path('Dashboard\img\employes'),$filename);

            $request->merge(array( 'img_url' => $filename));

        }
        else
        {
            $request->merge(array( 'img_url' => $employe-> img_url));
        }

        
        
        $employe->update($request->all());
        return redirect()->route('admin.employe.index');
        }

        return redirect()->back()->with('errors' ,'This request is out of the event'); 
      
    }

    public function destroy( $id)
    {
        $employe = $this->employeModel::find($id);
        if($employe != null)
        {
           $existsPath = public_path('Dashboard\img\employes\\'.$employe-> img_url);
           if(File::exists($existsPath))
             {
             File::delete($existsPath);
             $employe->delete();

             }
             else
             {
                return redirect()->back()->with('errors' ,'This request is out of the event'); 
             }
       }
       return redirect()->back();
    }


   public function IsDisplayActive($id , $bool)
    {
        if($bool != 1){

            $employe = $this->employeModel::get();

            for($i=0 ; $i < count($employe) ;$i++ ){

                if($employe[$i]->id == $id){

                    $employe[$i]-> is_active = 1;
                    $employe[$i]->save();
                }elseif($employe[$i]->id != $id){

                    $employe[$i]-> is_active = 0;
                    $employe[$i]->save();
                }  
            }


             return redirect()->back();
        }
        

       
        return redirect()->back()->with('errors' ,'It\'s already activatedt'); 

    }

}



