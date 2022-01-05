<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\TestimonialInterface;
use App\Http\Requests\Admin\Testimonial\AddTestimonialRequest;
use App\Http\Requests\Admin\Testimonial\DeleteTestimonialRequest;
use App\Http\Requests\Admin\Testimonial\UpdateTestimonialRequest;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private $testimonialInterface;

    public function __construct(TestimonialInterface $testimonial)
    {
        $this->testimonialInterface = $testimonial;
    }

    public function index()
    {
        return $this->testimonialInterface->index();
    }

    public function unread()
    {
        return $this->testimonialInterface->unread();
    }

    public function store(AddTestimonialRequest $request)
    {
        return $this->testimonialInterface->store($request);
    }

    public function show($id)
    {
        return $this->testimonialInterface->show($id);
    }

    public function update(UpdateTestimonialRequest $request)
    {
        return $this->testimonialInterface->update($request);
    }

    public function destroy(DeleteTestimonialRequest $request)
    {
        return $this->testimonialInterface->destroy($request);
    }
}
