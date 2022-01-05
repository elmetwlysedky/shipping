<?php
namespace App\Http\Traits;

trait InfoSiteTrait
{
    private function show_all_info()
    {
        return $this->infoSiteModel::get();
    }

    private function get_info_by_id($id)
    {
        return $this->infoSiteModel::findOrFail($id);
    }
}
