<?php

namespace App\Http\Requests\Admin\InfoSite;

use App\Models\InfoSite;
use Illuminate\Foundation\Http\FormRequest;

class UpdateInfoSiteRequest extends FormRequest
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
        return array_merge(InfoSite::rule(), ['info_id' => 'required|exists:info_sites,id', 'logo' => 'mimes:png,jpg,jpeg,webp']);
    }

    public function messages()
    {
        return (new AddInfoSiteRequest)->messages();
    }

}
