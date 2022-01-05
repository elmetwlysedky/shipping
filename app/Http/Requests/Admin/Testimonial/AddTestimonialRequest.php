<?php

namespace App\Http\Requests\Admin\Testimonial;

use Illuminate\Foundation\Http\FormRequest;

class AddTestimonialRequest extends FormRequest
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
            'email' => 'required|email',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('Dashboard/messages.name.required'),
            'name.min' => trans('Dashboard/messages.name.min'),
            'email.required' => trans('Dashboard/messages.email.required'),
            'email.email' => trans('Dashboard/messages.email.email'),
            'description.required' => trans('Dashboard/messages.description.required'),
        ];
    }
}
