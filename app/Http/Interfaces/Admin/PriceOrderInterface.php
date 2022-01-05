<?php

namespace App\Http\Interfaces\Admin;

interface PriceOrderInterface
{
    public function index();

    public function create_new_order();

    public function store_new_order($request);

    public function show_order($id);

    public function update($request);

    public function delete($request);
}
