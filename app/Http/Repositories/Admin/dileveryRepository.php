<?php

namespace App\Http\Repositories\Admin;

use Illuminate\Http\Request;
use App\Http\Interfaces\Admin\dileveryInterface;
use  App\Models\DeliveryType;
use Illuminate\Database\Eloquent\Collection ;
use Illuminate\Support\Facades\File;
class dileveryRepository implements dileveryInterface
{

    private $dileveryModel;

public function __construct(DeliveryType $model){
    $this->dileveryModel  =  $model ;
}

    public function index()
    {
       $shiments = $this->dileveryModel::get();
      
        return view('Dashboard.dilevery.index',compact('shiments'));
    }

    public function create(){


        return view('Dashboard.dilevery.create');
    }


    public function store(Request $request){

        $fileNameIcon = null;
       
        if($request->file('icons') != null){

            // not null

            $fileNameIcon = 'ICON'. time() . uniqid() . '.' . $request->file('icons')->getClientOriginalExtension();

            $request->file('icons')->move(public_path('Dashboard\img\delivery'), $fileNameIcon) ;
         
            
        }
        $fileNameimgs = null;
        if($request->file('imgs') != null){
            // nullable
            $fileNameimgs = 'IMGS' . time() . uniqid() . '.' . $request->file('imgs')->getClientOriginalExtension();

           $request->file('imgs')->move(public_path('Dashboard\img\delivery'), $fileNameimgs) ;
           
         }

    
     
        $this->dileveryModel::create([
            'name' =>  ['en' =>  $request-> name['en'] , 'ar' =>  $request-> name['ar']],
          
            'details' => ['en' => $request-> details['en'], 'ar' => $request->details['ar']],
            

            'title_main' => ['en' => $request->title_main['en'], 'ar' => $request->title_main['ar']],
            
            'title_sup' => ['en' => $request-> title_sup['en'], 'ar' => $request->title_sup['ar']],
            'icon_url' => $fileNameIcon,
            'img_url' => $fileNameimgs,
            
        ]);

        return redirect()->route('admin.delivery.index');

    }

    public function edit($id){

        $shipments =  $this->dileveryModel::find($id);
       
     

        return view('Dashboard.dilevery.edit' , compact('shipments'));
    }

    public function update(Request $request){


     $dilevery =  $this->dileveryModel::find($request-> shipmentId);


        if( $dilevery != null){

           if($request->file('icons') != null ){
        
              File::delete( public_path('Dashboard\img\delivery\\'.$dilevery->icon_url));

              $fileNameIcon = time() . uniqid() . '.' . $request->file('icons')->getClientOriginalExtension();
              $request->file('icons')->move(public_path('Dashboard\img\delivery'), $fileNameIcon) ;

              $dilevery-> icon_url =  $fileNameIcon ;
            

        }

        if($request->file('imgs') != null){
          

           File::delete( public_path('Dashboard\img\delivery\\'.$dilevery-> img_url));
          
            $fileNameimgs = time() . uniqid() . '.' . $request->file('imgs')->getClientOriginalExtension();
        
            $result =   $request->file('imgs')->move(public_path('Dashboard\img\delivery'), $fileNameimgs) ;
        
            $dilevery-> img_url = $fileNameimgs ;
           
         }

       $date = $request->validated();
       $dilevery->update($date);
       
       return redirect()->route('admin.delivery.index');

        }
        
        
        return redirect()->back()->with('errors' ,trans('Dashboard\delivery.Methodupdate')); 
       
    }

    public function destroy( $id){

        $dilevery =  $this->dileveryModel::find($id);

        File::delete( public_path('Dashboard\img\delivery\\'.$dilevery-> img_url));
        File::delete( public_path('Dashboard\img\delivery\\'.$dilevery-> icon_url));

        $dilevery->delete();

        return redirect()->back();
    }


    public function activated(Request $request){
        
      $result =  $this->dileveryModel::all();
     
      
      

      if($request-> is_active == '0'){

        $update = $result->find($request->id) ;
        $update-> is_active_limit = $request->is_active;
        $update->save();
        return redirect()->back() ;
      }

      if($request->is_active == '1'){

        //$select-> view_row  ( view_row column Can be expanded or decreased)
      if(count($result->where('is_active_limit',1)) < 4 ){
        $update = $result->find($request->id) ;
        $update-> is_active_limit = $request->is_active;
       
        $update->save();
        return redirect()->back() ;
      }

    }
      return redirect()->back()->with('success' ,trans('Dashboard\delivery.Methodactivated')); 
     
    }
    // Settings activated  display item weclome-section  limited just Two show required (activatedII -> (II)  number 2 language Latin ) 
    public function activatedII(Request $request)
    {
        $result =  $this->dileveryModel::all();
     
      
       
  
        if($request-> is_active_section == '0'){
  
          $update = $result->find($request->id) ;
          $update-> is_active_section = $request-> is_active_section;
         
          $update->save();
          return redirect()->back() ;
        }

        if($request->is_active_section == '1'){

            //$select-> view_row  ( view_row column Can be expanded or decreased)
          if(count($result->where('is_active_section',1)) < 2 ){
            $update = $result->find($request->id) ;
            $update-> is_active_section = $request->is_active_section;
           
            $update->save();
            return redirect()->back() ;

          }
    
        }
        return redirect()->back()->with('IsActiveSection' ,trans('Dashboard\delivery.methodactivatedII'));
    }

    // Settings  record view page
    public function record(){

        $select = $this->dileveryModel->select('view_row')->first();

        return view('Dashboard.dilevery.records')->with('select' ,isset($select->view_row)? $select->view_row : null );

    }

 // Settings display count records operation update (is column view_row by defualt = 4)
    public function records(Request $Count){

        $paresInt = (int)$Count->view_row;

       if(gettype($paresInt) =='integer' && $paresInt > 0){
        $model =   $this->dileveryModel::all();
       
        if( $paresInt <= count($model) ){

          $this->dileveryModel::where('view_row', '=', $Count->oldview)->update(['view_row'=> $Count->view_row]);
     
        
        
      
        return redirect()->back()->with('succes' ,trans('Dashboard\delivery.methodRecordsSuccess')); 

        }
        else
        {
          return redirect()->back()->with('error' ,trans('Dashboard\delivery.methodRecords_Errors')); 

        }
        
       }
       return redirect()->back()->with('error' ,trans('Dashboard\delivery.methodRecordsErrors')); 
        
    }


}