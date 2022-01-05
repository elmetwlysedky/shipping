<?php

namespace App\Http\Requests\Admin\InfoSite;

use App\Models\InfoSite;
use Illuminate\Foundation\Http\FormRequest;

class AddInfoSiteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
        return array_merge(InfoSite::rule(),['logo' => 'required|mimes:png,jpg,jpeg,webp']);
    }

    public function messages()
    {
        return [
            'en_title.required' => trans('Dashboard/messages.en_title.required'),
            'en_title.min' => trans('Dashboard/messages.en_title.min'),
            'ar_title.required' => trans('Dashboard/messages.ar_title.required'),
            'ar_title.min' => trans('Dashboard/messages.ar_title.min'),
            'phone.required' => trans('Dashboard/messages.phone.required'),
            'phone.min' => trans('Dashboard/messages.phone.min'),
            'email.required' => trans('Dashboard/messages.email.required'),
            'email.email' => trans('Dashboard/messages.email.email'),
            'ar_day.required' => trans('Dashboard/messages.ar_day.required'),
            'ar_day.min' => trans('Dashboard/messages.ar_day.min'),
            'en_day.required' => trans('Dashboard/messages.en_day.required'),
            'en_day.min' => trans('Dashboard/messages.en_day.min'),
            'open_time.required' => trans('Dashboard/messages.open_time.required'),
            'close_time.required' => trans('Dashboard/messages.close_time.required'),
            'facebook_url.required' => trans('Dashboard/messages.facebook_url.required'),
            'facebook_url.url' => trans('Dashboard/messages.facebook_url.url'),
            'twitter_url.required' => trans('Dashboard/messages.twitter_url.required'),
            'twitter_url.url' => trans('Dashboard/messages.twitter_url.url'),
            'linkedin_url.required' => trans('Dashboard/messages.linkedin_url.required'),
            'linkedin_url.url' => trans('Dashboard/messages.linkedin_url.url'),
            'logo.required' => trans('Dashboard/messages.logo.required'),
            'logo.mimes' => trans('Dashboard/messages.logo.mimes'),


        ];
    }
}
