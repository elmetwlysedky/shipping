<?php

namespace App\Http\Traits;

trait PartnerTrait
{
    private function show_all_partners()
    {
        return $this->partnerModel::get();
    }

    private function get_partner_by_id($id)
    {
        return $this->partnerModel::findOrFail($id);
    }
}
