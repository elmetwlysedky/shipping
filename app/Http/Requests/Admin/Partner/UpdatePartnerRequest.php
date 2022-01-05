<?php

namespace App\Http\Requests\Admin\Partner;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartnerRequest extends FormRequest
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
            'partner_id' => 'required|exists:partners,id',
            'en_name' => 'required|min:3',
            'ar_name' => 'required|min:3',
            'link' => 'required|url',
            'logo' => 'file:image|mimes:png,jpg,webp,jpeg'
        ];
    }

    public function messages()
    {
        return (new AddPartnerRequest)->messages();
    }
}
