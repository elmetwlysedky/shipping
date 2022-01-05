<?php

namespace App\Http\Traits;

trait PriceOrderTrait
{

    private function show_all_message()
    {
        return $this->priceOrderModel::get();
    }

    private function get_message_by_id($id)
    {
        return $this->priceOrderModel::findOrFail($id);
    }

    private function show_unread_message()
    {
        return $this->priceOrderModel::where('is_read', 0)->get();
    }
}
