<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon ;
class UpdateEmployesRequest extends FormRequest
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
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name.*' =>'required|string|min:7|max:70' ,
           
    
            'Country.*'=>'required|string|min:3|max:40',
           
    
            'details.*'=>'required|string|min:5',
         
    
            'city.*' =>'required|string|min:3|max:20',
    
            'birth_date'=> [
                'required',
                
                'before:' . Carbon::now()->subYears(18)->format('d-m-Y')
              ],
            'phone'=>'required|string|unique:employes,phone,'.$this->get('employeId'),
            'email'=>'required|string|unique:employes,email,'.$this->get('employeId'),
            'imgs'=> 'nullable|mimes:jpg,jpeg,png'
        ];
    }
}
