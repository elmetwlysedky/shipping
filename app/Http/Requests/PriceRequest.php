<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    public function rules()
    {

        return [
            '$List_Prices.*.price' => 'required',
            '$List_Prices.*.material_type_id' => 'required',
            '$List_Prices.*.service_type_id' => 'required',
            '$List_Prices.*.distance' => 'required',
            '$List_Prices.*.unit_id' => 'required',
            '$List_Prices.*.wheight'=> 'required|number',
            '$List_Prices.*.currency_id'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'price.required' => trans('Dashboard\trans_price.price.required'),
            'material_type_id.required' => trans('Dashboard\trans_price.material_type_id.required'),
            'currency_id.required' => trans('Dashboard\trans_price.currency_id.required'),
            'service_type_id.required' => trans('Dashboard\trans_price.service_type_id.required'),
            'distance.required' => trans('Dashboard\trans_price.distance.required'),
            'unit_id.required' =>trans('Dashboard\trans_price.unit_id.required'),
            'wheight.required' => trans('Dashboard\trans_price.wheight.required'),
            'distance.required' => trans('Dashboard\trans_price.distance.required'),
        ];
    }
}
