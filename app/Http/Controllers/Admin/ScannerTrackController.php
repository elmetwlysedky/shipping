<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Scanner;
use App\Models\Shipment;
use App\Models\TrackingStage;
use App\Models\TrackingShipment;
use App\Http\Requests\ScannerTrackRequest;

use App\Notifications\send_driver_users;
use App\Notifications\send_number_shipment_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class ScannerTrackController extends Controller
{
    public function index()
    {
        $shipments = Shipment::where('tracking_stage_id','=',2)->get();
        $tracking_stages = TrackingStage::all();
        return view('Dashboard\Scanner\Scanner_Track_Shipment\list_all_approved',compact('shipments','tracking_stages'));
    }


    public function create()
    {
        //
    }
    public function store(ScannerTrackRequest $request)
    {

        try {

            $validated = $request->validated();


        $scanner_track = new TrackingShipment();
        $scanner_track->tracking_stage_id = $request->tracking_stage_id;
        $scanner_track->customer_id=$request->customer_id;
        $scanner_track->desc=$request->desc;
        $scanner_track->location_now=$request->location_now;
        $scanner_track->outcomming_date=$request->outcomming_date;
        $scanner_track->full_number = $request->full_number;
        $scanner_track->tracking_id = auth('scanner')->user()->id;
        $scanner_track->tracking_type='App\Models\Scanner';

        $scanner_track->save();


      $shipment = Shipment::where('id',$request->id)->first();

//
////
        $shipment->update(
            ['tracking_stage_id'=>$request->tracking_stage_id
                ,]);
           $user=Customer::findorFail($request->customer_id);
            $scanner=TrackingShipment::latest()->first();









            Notification::send($user,new send_number_shipment_users($scanner));
            toastr()->success(trans('Dashboard\messages.success'));
            return redirect()->route('scanner_tracks.index');
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


    public function destroy(ScannerTrackRequest $request)
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
            $customer->delete();
            $shipment->delete();

            toastr()->success(trans('Dashboard\messages.Delete'));
            return redirect()->route('scanners_tracks.index');
        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }
}
