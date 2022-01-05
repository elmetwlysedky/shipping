<?php

namespace App\Http\Livewire;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Price;
use App\Models\Series;
use App\Models\ShipmentAttachment;
use App\Models\TrackingStage;
use App\Notifications\Add_shipment;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use App\Models\Curency;
use App\Models\Unit;
use App\Models\Shipment;
use App\Models\ShippingMaterialType;
use App\Models\ServiceType;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class Shipping extends Component
{

    use WithFileUploads;

//customer_details
    public $currentStep = 1;
    public $updateMode = false, $catchError, $successMessage = '',
        $show_table = true, $shipments, $showformadd, $firstStepSubmit_edit, $firstStepSubmit;

    public $email, $password, $sender_mother_name_en, $sender_full_name_en, $reciver_full_name_en, $reciver_mother_name_en;
    public $sender_mother_name_ar, $sender_full_name_ar, $reciver_full_name_ar, $reciver_mother_name_ar;

    public $sender_national_id, $sender_phone, $address_sender, $reciver_national_id, $reciver_phone, $address_reciver;
//shipment_details
    public $shipment_num, $shipment_name_ar, $shipment_name_en, $amount, $curencie_types, $price, $sender_date, $expected_recived_date, $type_id, $unit_id,
        $costumer_id, $whieght, $sender_address_address, $sender_address_latitude, $sender_address_longitude, $reciver_address_address,
        $reciver_address_latitude, $reciver_address_longitude, $unit, $address_address, $address_latitude, $address_longitude;
    public $materia_types, $customer_id, $series_id, $currency_id, $service_type_id, $tracking_stage_id;
    public $SecondStepEdit, $secondStepSubmit;

    public $photos;

    public function showformadd()
    {
        $this->show_table = false;
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'email' => 'required|email',
            'sender_national_id' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'sender_phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'reciver_national_id' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'reciver_phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ]);
    }


    public function render()

    {
        return view('livewire.shipping',
            [
                'seriess' => Series::all(),
                'material_types' => ShippingMaterialType::all(),
                'shipments_list' => Shipment::all(),
                'currencies' => Curency::all(),
                'units_types' => Unit::all(),
                'service_types' => ServiceType::all(),
                'tracking_stages' => TrackingStage::all(),


            ]);
    }


    public function firstStepSubmit()
    {

        $this->validate([
            'email' => 'required|unique:customers,email,',
            'password' => 'required',
            'sender_full_name_ar' => 'required',
            'sender_full_name_en' => 'required',
            'sender_mother_name_ar' => 'required',
            'sender_mother_name_en' => 'required',
            'sender_national_id' => 'required|unique:customers,sender_national_id,',
            'sender_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

            'reciver_full_name_en' => 'required',
            'reciver_full_name_ar' => 'required',
            'reciver_mother_name_en' => 'required',
            'reciver_mother_name_ar' => 'required',

            'reciver_national_id' => 'required|unique:customers,reciver_national_id,',
            'reciver_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address_reciver' => 'required',
            'address_sender' => 'required'

        ],[
            'email.required' => trans('Dashboard\messages.email'),
            'password.required' => trans('Dashboard\messages.password'),
            'sender_full_name_ar.required' => trans('Dashboard\messages.sender_full_name_ar'),
            'sender_full_name_en.required' => trans('Dashboard\messages.sender_full_name_en'),
            'sender_mother_name_ar.required' => trans('Dashboard\messages.sender_mother_name_ar'),
            'sender_mother_name_en.required' => trans('Dashboard\messages.sender_mother_name_en'),
            'sender_national_id.required' => trans('Dashboard\messages.sender_national_id'),
            'sender_phone.required' =>  trans('Dashboard\messages.sender_phone'),

            'reciver_full_name_en.required' =>  trans('Dashboard\messages.reciver_full_name_en'),
            'reciver_full_name_ar.required' => trans('Dashboard\messages.reciver_full_name_ar'),
            'reciver_mother_name_en.required' => trans('Dashboard\messages.reciver_mother_name_en'),
            'reciver_mother_name_ar.required' =>  trans('Dashboard\messages.reciver_mother_name_ar'),

            'reciver_national_id.required' =>  trans('Dashboard\messages.reciver_national_id'),
            'reciver_phone.required' =>  trans('Dashboard\messages.address_reciver'),
            'address_reciver.required' => trans('Dashboard\messages.reciver_phone'),
            'address_sender.required' => trans('Dashboard\messages.address_sender'),


        ]);

        $this->currentStep = 2;

    }

    public function secondStepSubmit()
    {

        $this->validate([
            'shipment_name_ar' => 'required',
            'shipment_name_en' => 'required',
            'amount' => 'required',
            'sender_date' => 'required',
            'whieght' => 'required',
            'type_id' => 'required',
            'unit_id' => 'required',
            'currency_id' => 'required',
            'service_type_id' => 'required',
            'expected_recived_date' => 'required',
            'address_address' => 'required',

        ],[
            'shipment_name_ar.required' =>  trans('Dashboard\messages.shipment_name_ar'),
            'shipment_name_en.required' => trans('Dashboard\messages.shipment_name_en'),
            'amount.required' => trans('Dashboard\messages.amount'),
            'sender_date.required' => trans('Dashboard\messages.sender_date'),
            'whieght.required' => trans('Dashboard\messages.whieght'),
            'type_id.required' => trans('Dashboard\messages.type_id'),
            'currency_id.required' => trans('Dashboard\messages.currency_id'),
            'expected_recived_date.required' =>  trans('Dashboard\messages.expected_recived_date'),

            'address_address.required' =>  trans('Dashboard\messages.address_address'),
        ]);

        $this->currentStep = 3;

    }


    public function back($step)
    {
        $this->currentStep = $step;

    }


    public function submitForm()
    {
        DB::beginTransaction();
        try {
            $Customers = new Customer();
            // Father_INPUTS
            $Customers->email = $this->email;
            $Customers->password = Hash::make($this->password);
            $Customers->sender_mother_name = ['en' => $this->sender_mother_name_en, 'ar' => $this->sender_mother_name_ar];
            $Customers->sender_full_name = ['en' => $this->sender_full_name_en, 'ar' => $this->sender_full_name_ar];

            $Customers->sender_national_id = $this->sender_national_id;
            $Customers->sender_phone = $this->sender_phone;
            $Customers->reciver_mother_name = ['en' => $this->reciver_mother_name_en, 'ar' => $this->reciver_mother_name_ar];
            $Customers->reciver_full_name = ['en' => $this->reciver_full_name_en, 'ar' => $this->reciver_full_name_ar];

            $Customers->reciver_national_id = $this->reciver_national_id;
            $Customers->reciver_phone = $this->reciver_phone;
            $Customers->address_sender = $this->address_sender;
            $Customers->address_reciver = $this->address_reciver;
            $Customers->series_id = $this->series_id;

            $Customers->save();
            if (!empty($this->shipment_name_ar) OR !empty($this->shipment_name_en)) {


                $price = Price::where('material_type_id', '=', $this->type_id)
                    ->where('service_type_id', '=', $this->service_type_id)
                    ->where('wheight', '<=', $this->whieght)->pluck('price');
                $Shipment = new Shipment();

                $Shipment->shipment_name = ['en' => $this->shipment_name_en, 'ar' => $this->shipment_name_ar];

                $Shipment->amount = $this->amount;
                $Shipment->price = $price;

                $Shipment->sender_date = $this->sender_date;
                $Shipment->whieght = $this->whieght;
                $Shipment->type_id = $this->type_id;
                $Shipment->costumer_id = Customer::latest()->first()->id;
                $Shipment->expected_recived_date = $this->expected_recived_date;
                $Shipment->unit_id = $this->unit_id;
                $Shipment->currency_id = $this->currency_id;
                $Shipment->address_address = $this->address_address;
                $Shipment->service_type_id = $this->service_type_id;
                $Shipment->tracking_stage_id = $this->tracking_stage_id;


                $Shipment->save();

            }



            if (!empty($this->photos)) {
                foreach ($this->photos as $photo) {
                    $photo->storeAs($this->sender_national_id, $photo->getClientOriginalName(), $disk="shipping_attachment");
                    ShipmentAttachment::create([
                        'shipment_id' => Shipment::latest()->first()->id,
                        'file_name' => $photo->getClientOriginalName(),
                    ]);
                }
            }
            DB::commit();
            $this->successMessage = trans('Dashboard\messages.success');
            $this->currentStep = 1;
            $Admin=Admin::get();
            $shipment=Shipment::latest()->first();
            $customer=Customer::latest()->first();
            Notification::send($Admin,new Add_shipment($shipment,$customer));
            return redirect()->to('/Add_shipment');
        } catch (\Exception $e) {
            $this->catchError = $e->getMessage();
        }

    }

    public function edit($id)
    {
        $this->show_table = false;
        $this->updateMode = true;

        $shipments = Shipment::where('id', $id)->first();
        $customers = Customer::where('id', $shipments->costumer_id)->first();
        $this->customer_id = $customers->id;
        $this->email = $customers->email;
        $this->password = $customers->password;
        $this->sender_mother_name_ar = $customers->gettranslation('sender_mother_name','ar');
        $this->sender_mother_name_en = $customers->gettranslation('sender_mother_name','en');

        $this->sender_full_name_en = $customers->gettranslation('sender_full_name','en');
        $this->sender_full_name_ar = $customers->gettranslation('sender_full_name','ar');

        $this->sender_national_id = $customers->sender_national_id;
        $this->sender_phone = $customers->sender_phone;
        $this->reciver_mother_name_ar = $customers->gettranslation('reciver_mother_name','ar');
        $this->reciver_mother_name_en = $customers->gettranslation('reciver_mother_name','en');
        $this->reciver_full_name = ['en'=>$customers->reciver_full_name_en,'ar'=>$customers->reciver_full_name_ar];

        $this->reciver_full_name_en = $customers->gettranslation('reciver_full_name','en');
        $this->reciver_full_name_ar = $customers->gettranslation('reciver_full_name','ar');

        $this->reciver_mother_name = ['en'=>$customers->reciver_mother_name_en,'ar'=>$customers->reciver_mother_name_ar];
        $this->reciver_national_id = $customers->reciver_national_id;
        $this->reciver_phone = $customers->reciver_phone;
        $this->address_sender = $customers->address_sender;
        $this->address_reciver = $customers->address_reciver;
        $this->series_id = $customers->series_id;

        $this->shipment_name =  ['en'=>$shipments->shipment_name_en,'ar'=>$shipments->shipment_name_ar];
        $this->shipment_name_ar = $shipments->gettranslation('shipment_name','ar');
        $this->shipment_name_en = $shipments->gettranslation('shipment_name','en');
        $this->amount = $shipments->amount;
        $this->price = $shipments->price;
        $this->sender_date = $shipments->sender_date;
        $this->whieght = $shipments->whieght;
        $this->type_id = $shipments->type_id;
        $this->costumer_id = $shipments->costumer_id;
        $this->expected_recived_date = $shipments->expected_recived_date;
        $this->unit_id = $shipments->unit_id;
        $this->currency_id = $shipments->currency_id;
        $this->address_address = $shipments->address_address;
        $this->tracking_stage_id =$shipments->tracking_stage_id;
        $this->service_type_id = $shipments->service_type_id;


    }


    public function firstStepSubmit_edit()
    {

        $this->validate([
            'email' => 'required|unique:customers,email,'.$this->customer_id,
            'password' => 'required',
//            'sender_mother_name' => 'required',
            'sender_full_name_ar' => 'required',
            'sender_full_name_en' => 'required',
            'sender_national_id' => 'required|unique:customers,sender_national_id,'.$this->customer_id,
            'sender_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

            'reciver_full_name_en' => 'required',
            'reciver_full_name_ar' => 'required',

//            'reciver_mother_name' => 'required',
            'reciver_national_id' => 'required|unique:customers,reciver_national_id,'.$this->customer_id,
            'reciver_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address_reciver' => 'required',
            'address_sender' => 'required'

        ]);
        $this->updateMode = true;
        $this->currentStep = 2;
    }

    public function SecondStepEdit()
    {




        $this->updateMode = true;
        $this->currentStep = 3;
    }

    public function submiteditForm()
    {
        DB::beginTransaction();
        try {
            if ($this->costumer_id) {
                $customer = Customer::find($this->costumer_id);
                $customer->update([
                    'email' => $this->email,
                    'sender_full_name'=>['ar'=>$this->sender_full_name_ar, 'en'=>$this->sender_full_name_en,],
                    'sender_mother_name'=>['ar'=>$this->sender_mother_name_ar, 'en'=>$this->sender_mother_name_en,],
                    'reciver_mother_name'=>['ar'=>$this->reciver_mother_name_ar, 'en'=>$this->reciver_mother_name_en,],
                    'reciver_full_name'=>['ar'=>$this->reciver_full_name_ar, 'en'=>$this->reciver_full_name_en,],
                    'password'=>$this->password,
                    'sender_national_id'=>$this->sender_national_id,
                    'sender_phone' => $this->sender_phone,
                    'reciver_national_id'=>$this->reciver_national_id,
                    'reciver_phone'=>$this->reciver_phone,

                    'address_sender' => $this->address_sender,
                    'address_reciver' => $this->address_reciver,
                    'series_id'=>$this->series_id,

                    'sender_national_id'=>$this->sender_national_id,

                    'sender_phone' => $this->sender_phone,
                    'reciver_mother_name'=>['ar'=>$this->reciver_mother_name_ar, 'en'=>$this->reciver_mother_name_en,],


                    'reciver_national_id'=>$this->reciver_national_id,

                    'reciver_phone'=>$this->reciver_phone,

                ]);
                if (!empty($this->shipment_name_ar)) {
                    $shipment = Shipment::where('costumer_id', $this->costumer_id);
                    $shipment->update([
                        'shipment_name'=>['ar'=>$this->shipment_name_ar, 'en'=>$this->shipment_name_en,],


                        'amount' => $this->amount,
                        'price' => $this->price,
                        'sender_date' => $this->sender_date,
                        'whieght' => $this->whieght,
                        'type_id' => $this->type_id,
                        'costumer_id' => $this->costumer_id,
                        'expected_recived_date' => $this->expected_recived_date,
                        'unit_id' => $this->unit_id,
                        'currency_id' => $this->currency_id,
                        'address_address' => $this->address_address,

                    ]);
                    if (!empty($this->photos)) {
                        foreach ($this->photos as $photo) {
                            $photo->storeAs($this->sender_national_id, $photo->getClientOriginalName(), $disk="shipping_attachment");
                            ShipmentAttachment::create([
                                'shipment_id' => Shipment::latest()->first()->id,
                                'file_name' => $photo->getClientOriginalName(),
                            ]);
                        }
                    }
                }

            }
            DB::commit();
            $this->successMessage = trans('Dashboard\messages.success');
            $this->currentStep = 1;
            return redirect()->to('/Add_shipment');

        } catch (\Exception $e) {
            $this->catchError = $e->getMessage();
        }


    }


    //clearForm
    public function clearForm()
    {
        $this->email = '';
        $this->password = '';
        $this->sender_mother_name_ar = '';
        $this->sender_full_name_ar = '';
        $this->sender_mother_name_en = '';
        $this->sender_full_name_en = '';
        $this->sender_national_id = '';
        $this->sender_phone = '';
        $this->reciver_full_name_ar = '';
        $this->reciver_mother_name_ar = '';
        $this->reciver_full_name_en = '';
        $this->reciver_mother_name_en = '';
        $this->reciver_national_id = '';
        $this->reciver_phone = '';
        $this->address_reciver = '';
        $this->address_reciver = '';
        $this->address_sender = '';

        $this->shipment_name_ar = '';
        $this->shipment_name_en = '';

        $this->amount = '';
        $this->price = '';
        $this->sender_date = '';
        $this->whieght = '';
        $this->type_id = '';
        $this->costumer_id = '';
        $this->expected_recived_date = '';
        $this->unit_id = '';
        $this->currency_id = '';
        $this->address_address = '';
        $this->service_type_id = '';

    }


    public function delete($id)
    {

        try{

            $shipments = Shipment::where('id', $id)->first();

            $customers = Customer::where('id', $shipments->costumer_id)->first();
            $customers->delete();
            $shipments->delete();

            $this->successMessage = trans('Dashboard\message.success');
            $this->currentStep = 1;
            return redirect()->to('/Add_shipment');


        }catch (\Exception $e) {
            $this->catchError = $e->getMessage();
        }

    }


}
