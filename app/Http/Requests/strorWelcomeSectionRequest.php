<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class strorWelcomeSectionRequest extends FormRequest
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
            'title_p.*' =>'required|string|min:5|max:100' ,
        
 
            'title_h.*'=>'required|string|max:150',
         
            'title_span.*' => 'nullable|string|max:60'
         
        ];
    }
}
