<?php
namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\conventionInterface;
use App\Models\Convention;
use Illuminate\Support\Facades\Storage;


class conventionRepository implements conventionInterface
{
    private $convention;
    public function __construct(Convention $pram)
    {
        $this->convention = $pram;
    }

    public function index(){
        $conv = convention::latest()->get();
        return view('Dashboard.convention.index',compact('conv'));
    }

    public function create(){
        return view('Dashboard.convention.create');
    }

    public function store($request){
        $data =$request->validated();
        if($request->photo != null)
        {
            $path = Storage::disk('public')->putFile('/convention',$request->photo);
            $data['photo']= $path;
        }
             convention::create($data);
            return redirect()->route('convention.index');
    }

    public function edit($id){
        $conv = convention::findorFail($id);
        return view('Dashboard.convention.edit',compact('conv'));
    }
    public function update($request , $id){
        $conv = convention::findorFail($id);
        $data = $request->validated();
        if($request->photo != null)
        {
            $path = Storage::disk('public')->putFile('/convention',$request->photo);
            $data['photo']= $path;
        }
        $conv->update($data);
        return redirect()->route('convention.index');
    }

    public function destroy($id){
        $conv = convention::findorfail($id);
        $conv->delete();
        return redirect()->route('convention.index');
    }


}
