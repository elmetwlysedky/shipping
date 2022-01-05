<?php

namespace App\Http\Interfaces\Admin;

interface TestimonialInterface
{
    public function index();

    public function unread();

    public function store($request);

    public function show($id);

    public function update($request);

    public function destroy($request);
}
