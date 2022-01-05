<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDileveryRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *unique:delivery_types,ar_name,'.$this->id
     * @return array
     */
    public function rules()
    {
        return [
            'name.*'=>'required|string|unique_translation:delivery_types,name,'.$this->get('shipmentId'),
           
             'details.*'=>'required|string|min:10',
    
            'title_main.*'=>'required|string|min:5',
       
            'title_sup.*'=>'required|string|min:5',
    
            'icons'=>'nullable',
            'omgs'=>'nullable',
             
        ];
    }
}
