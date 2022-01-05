<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Scanner;
use App\Models\Shipment;
use App\Models\ShipmentAttachment;
use App\Models\TrackingStage;
use App\Models\TrackingShipment;
use App\Http\Requests\AdminTrackRequest;

use App\Notifications\send_scanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminTrackController extends Controller
{

    public function index()
    {
        $shipments = Shipment::where('tracking_stage_id','=',1)->get();
        $tracking_stages = TrackingStage::all();
        return view('Dashboard\Admin\Admin_Track_Shipment\list_all_pending',compact('shipments','tracking_stages'));
    }


    public function create()
    {

    }


    public function store(AdminTrackRequest $request)
    {
        try
        {
            $validated = $request->validated();
            $admin_track = new TrackingShipment();
            $admin_track->tracking_stage_id = $request->tracking_stage_id;
            $admin_track->customer_id=$request->customer_id;
            $admin_track->desc=$request->desc;
            $admin_track->location_now=$request->location_now;
            $admin_track->outcomming_date=$request->outcomming_date;
            $admin_track->full_number = $request->full_number;
            $admin_track->tracking_id = auth('admin')->user()->id;
            $admin_track->tracking_type='App\Models\Admin';

            $admin_track->save();
            $shipment = Shipment::where('id',$request->id)->first();

            $shipment->update(
                ['tracking_stage_id'=>$request->tracking_stage_id
                    ,]);

             $scanner_user=Scanner::get();
             $track=TrackingShipment::latest()->first();
            Notification::send($scanner_user,new send_scanner($track));
            toastr()->success(trans('Dashboard\messages.success'));
            return redirect()->route('admins_tracks.index');

        }


        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    public function show($id)
    {
      $admin_track_Shipment= TrackingShipment::findorFail($id);
      return view('',compact('admin_track_Shipment'));

    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(AdminTrackRequest $request)
    {
        try {
            $shipment = Shipment::where('id', $request->id)->first();

            $customer_id = $shipment->costumer_id;
            $customer = Customer::where('id', $customer_id)->first();
            $images = ShipmentAttachment::where('shipment_id', $request->id);
            if (!empty($images)) {
                foreach ($images as $image) {
                    $image->delete();
                }

            }
            $customer->delete();
            $shipment->delete();
            toastr()->success(trans('Dashboard\messages.delete'));
            return redirect()->route('admins_tracks.index');


        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }
    }
}
