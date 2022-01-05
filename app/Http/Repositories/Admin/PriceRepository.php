<?php

namespace App\Http\Repositories\Admin;

use App\Models\Curency;
use App\Models\serviceType;
use App\Models\ShippingMaterialType;
use App\Models\Unit;
use App\Models\Price;

use Illuminate\Http\Request;
use App\Http\Requests\PriceRequest;
use App\Http\Interfaces\Admin\PriceInterface;


class PriceRepository implements PriceInterface
{

    public function all_prices()
    {
        $prices = Price::all();
        $material_types = ShippingMaterialType::all();
        $currencies = Curency::all();
        $units = Unit::all();
        $service_types = serviceType::all();
        return view('Dashboard\Admin\Price\prices',compact
        ('prices','material_types','currencies','units','service_types'));
    }

    public function create_price()
    {
        $material_types = ShippingMaterialType::all();
        $currencies = Curency::all();
        $units = Unit::all();
        $service_types = serviceType::all();
        return view('Dashboard\Admin\Price.create_price',compact(
            'material_types','currencies','units','service_types'
        ));
    }

public function store_price(PriceRequest $request)
    {

        $List_Prices = $request->List_Classes;

        try  {

            $validated = $request->validated();


            foreach ($List_Prices as $List_Price) {

                $My_Price = new Price();

                $My_Price->material_type_id = $List_Price['material_type_id'];
                $My_Price->service_type_id = $List_Price['service_type_id'];
                $My_Price->unit_id = $List_Price['unit_id'];
                $My_Price->wheight = $List_Price['whieght'];
                $My_Price->price = $List_Price['price'];
                $My_Price->distance = $List_Price['distance'];
                $My_Price->currency_id = $List_Price['currency_id'];


                $My_Price->save();

            }

            toastr()->success(trans('Dashboard\messages.success'));
            return redirect()->route('prices.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }



    public function show_price($id)
    {
        //
    }


    public function edit_price($id)
    {
        //
    }

    public function update_price(PriceRequest $request)
    {

        try {
            $validated = $request->validated();
            $newPrice =   Price::FindOrFail($request->id);

            $newPrice->material_type_id = $request->material_type_id;
            $newPrice->service_type_id = $request->service_type_id;
            $newPrice->unit_id = $request->unit_id;
            $newPrice->wheight = $request->wheight;
            $newPrice->price = $request->price;
            $newPrice->distance = $request->distance;
            $newPrice->currency_id = $request->currency_id;

            $newPrice->save();

            toastr()->success(trans('Dashboard\messages.success'));

            return redirect()->route('prices.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function destroy_price(Request $request)
    {
        try{


            $Price = Price::FindOrFail($request->id);
            $Price->delete();
            toastr()->error(trans('Dashboard\messages.Delete'));
            return redirect()->route('prices.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);

        }
    }

}