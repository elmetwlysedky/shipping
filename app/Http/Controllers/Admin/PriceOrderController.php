<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\PriceOrderInterface;
use App\Http\Requests\Admin\PriceOrder\AddPriceOrderRequest;
use App\Http\Requests\Admin\PriceOrder\DeletePriceOrderRequest;
use App\Http\Requests\Admin\PriceOrder\UpdatePriceOrderRequest;


class PriceOrderController extends Controller
{
    private $priceOrderInterface;

    public function __construct(PriceOrderInterface $priceOrder)
    {
        $this->priceOrderInterface = $priceOrder;
    }

    public function index()
    {
        return $this->priceOrderInterface->index();
    }

    public function store(AddPriceOrderRequest $request)
    {
        return $this->priceOrderInterface->store_new_order($request);
    }

    public function show($id)
    {
        return $this->priceOrderInterface->show_order($id);
    }

    public function update(UpdatePriceOrderRequest $request)
    {
        return $this->priceOrderInterface->update($request);
    }

    public function delete(DeletePriceOrderRequest $request)
    {
        return $this->priceOrderInterface->delete($request);
    }
}
