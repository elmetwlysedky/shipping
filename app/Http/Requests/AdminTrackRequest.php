<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminTrackRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
       'tracking_stage_id'=> 'required',
        'customer_id'=> 'required',
        'desc'=>'required',
        'location_now'=>'required',
        'outcomming_date'=>'required',
        'full_number' => 'required',

            //
        ];
    }

    public function messages()
    {
        return [
            'tracking_stage_id.required' => trans('Dashboard\messages.tracking_stage_id.required'),
            'customer_id.required' => trans('Dashboard\messages.customer_id.required'),
            'desc.required' => trans('Dashboard\messages.desc.required'),
            'location_now.required' => trans('Dashboard\messages.location_now.required'),
            'outcomming_date.required' => trans('Dashboard\messages.outcomming_date.required'),
            'full_number.required' =>trans('Dashboard\messages.unit_id.full_number.required'),

        ];
    }
}
