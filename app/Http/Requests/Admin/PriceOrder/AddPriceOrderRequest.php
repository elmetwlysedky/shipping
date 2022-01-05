<?php

namespace App\Http\Requests\Admin\PriceOrder;

use Illuminate\Foundation\Http\FormRequest;

class AddPriceOrderRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email|regex:/^.+@.+$/i',
            'address' => 'required|min:10',
            'select' => 'required',
            'message' => 'required|min:10',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('Dashboard/messages.name.required'),
            'name.min' => trans('Dashboard/messages.name.min'),
            'email.required' => trans('Dashboard/messages.email.required'),
            'email.email' => trans('Dashboard/messages.email.email'),
            'address.required' => trans('Dashboard/messages.address.required'),
            'address.min' => trans('Dashboard/messages.address.min'),
            'select.required' => trans('Dashboard/messages.select.required'),
            'message.required' => trans('Dashboard/messages.message.required'),
            'message.min' => trans('Dashboard/messages.message.min'),
        ];
    }
}
