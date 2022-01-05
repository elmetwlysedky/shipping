<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\TestimonialInterface;
use App\Http\Traits\TestimonialsTrait;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Session;

class TestimonialRepository implements TestimonialInterface
{
    use TestimonialsTrait;
    private $testimonialModel;

    public function __construct(Testimonial $testimonial)
    {
        $this->testimonialModel = $testimonial;
    }

    public function index()
    {
        $testimonials = $this->show_all_testimonials();
        return view('Dashboard.testimonials.index', compact('testimonials'));
    }

    public function unread()
    {
        $testimonials = $this->show_unread_testimonials();
        return view('Dashboard.testimonials.unread', compact('testimonials'));
    }

    public function store($request)
    {
        $this->testimonialModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description
        ]);
        Session::flash('done', 'Your Review Has Been Sent Now!, will be shown soon');
        return redirect()->back();
    }

    public function show($id)
    {
        $testimonial = $this->get_testimonial_by_id($id);
        return view('Dashboard.testimonials.show', compact('testimonial'));
    }

    public function update($request)
    {
        $testimonial = $this->get_testimonial_by_id($request->testimonial_id);
        $testimonial->update([
            'status' => 1
        ]);
        Session::flash('done', 'Testimonial Has Been Approved');
        return redirect(route('admin.testimonial.index'));
    }

    public function destroy($request)
    {
        $testimonial = $this->get_testimonial_by_id($request->testimonial_id);
        $testimonial->delete();
        Session::flash('done', 'Testimonial Deleted Successfully');
        return back();
    }
}
