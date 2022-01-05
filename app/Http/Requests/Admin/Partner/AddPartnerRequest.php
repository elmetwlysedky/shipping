<?php

namespace App\Http\Requests\Admin\Partner;

use Illuminate\Foundation\Http\FormRequest;

class AddPartnerRequest extends FormRequest
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
            'en_name' => 'required|min:3',
            'ar_name' => 'required|min:3',
            'link' => 'required|url',
            'logo' => 'required|mimes:png,jpg,webp,jpeg'
        ];
    }

    public function messages()
    {
        return [
            'en_name.required' => trans('Dashboard/messages.en_name.required'),
            'en_name.min' => trans('Dashboard/messages.en_name.min'),
            'ar_name.required' => trans('Dashboard/messages.ar_name.required'),
            'ar_name.min' => trans('Dashboard/messages.ar_name.min'),
            'link.required' => trans('Dashboard/messages.link.required'),
            'link.url' => trans('Dashboard/messages.link.url'),
            'logo.required' => trans('Dashboard/messages.logo.required'),
            'logo.mimes' => trans('Dashboard/messages.logo.mimes'),
        ];
    }
}
