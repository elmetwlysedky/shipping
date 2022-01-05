<?php

namespace App\Http\Livewire;

use App\Models\TrackingShipment;
use Livewire\Component;
use Livewire\WithPagination;

class Tracking extends Component
{
    use WithPagination;

public $term;

    public function render()
    {
        return view('livewire.tracking',

            [
                'tracking_shipments' => TrackingShipment::when($this->term,function($query,$term){

                  return $query->where('full_number','LIKE',"$term")->get();
                })

            ]);
    }




}
