<?php

namespace App\Http\Traits;

trait TestimonialsTrait
{
    private function show_all_testimonials()
    {
        return $this->testimonialModel::get();
    }

    private function show_unread_testimonials()
    {
        return $this->testimonialModel::where('status', 0)->get();
    }

    private function get_testimonial_by_id($id)
    {
        return $this->testimonialModel::findOrFail($id);
    }
}
