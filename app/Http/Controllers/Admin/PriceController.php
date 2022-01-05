<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\PriceInterface;
use Illuminate\Http\Request;
use App\Http\Requests\PriceRequest;

class PriceController extends Controller
{
    private $price;

    public function __construct(PriceInterface $price)
    {
        $this->price = $price;
    }
    public function index()
    {
        return $this->price->all_prices();
    }


    public function create()
    {
       return $this->price->create_price();
    }


    public function store(PriceRequest $request)
    {
        return $this->price->store_price($request);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(PriceRequest $request)
    {
        return $this->price->update_price($request);
    }

    public function destroy(PriceRequest $request)
    {
        return $this->price->destroy_price($request);

    }
}
