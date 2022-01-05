<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Models\TrackingStage;
use App\Models\TrackingShipment;
use App\Http\Requests\WarehouseTrackRequest;

use Illuminate\Http\Request;

class WarehouseTrackController extends Controller
{

    public function index()
    {
        $shipments = Shipment::where('tracking_stage_id','=',4)->get();
        $tracking_stages = TrackingStage::all();
        return view('Dashboard\WarehousingOfficer\Warehouse_Track_Shipment\list_all_warehose',compact('shipments','tracking_stages'));
    }


    public function create()
    {
        //
    }

    public function store(WarehouseTrackRequest $request)
    {
        try{
            $validated = $request->validated();

            $warehouse_track = new TrackingShipment();
            $warehouse_track->tracking_stage_id = $request->tracking_stage_id;
            $warehouse_track->customer_id=$request->customer_id;
            $warehouse_track->desc=$request->desc;
            $warehouse_track->location_now=$request->location_now;
            $warehouse_track->outcomming_date=$request->outcomming_date;
            $warehouse_track->full_number = $request->full_number;
            $warehouse_track->tracking_id = auth('warehousing_officer')->user()->id;
            $warehouse_track->tracking_type='App\Models\WarehousingOfficer';

            $warehouse_track->save();


            $shipment = Shipment::where('id',$request->id);

            $shipment->update(['tracking_stage_id'=>$request->tracking_stage_id,]);
            toastr()->success(trans('Dashboard\messages.success'));
            return redirect()->route('drivers_tracks.index');


                }catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(WarehouseTrackRequest $request)
    {
        try{
        $shipment = Shipment::where('id',$request->id)->first();

        $customer_id = $shipment->costumer_id;
        $customer = Customer::where('id',$customer_id)->first();
        $images = ShipmentAttachment::where('shipment_id',$request->id);
        if(!empty($images)){
            foreach($images as $image){
                $image->delete();
            }

        }
        $shipment->delete();
        $customer->delete();
        toastr()->success(trans('Dashboard\messages.Delete'));
        return redirect()->route('warehouse_tracks.index');


            }catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
            }
}
