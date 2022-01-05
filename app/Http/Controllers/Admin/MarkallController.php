<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use Illuminate\Http\Request;

class MarkallController extends Controller
{
    public function MarkAsRead_contact()
    {
        $userUnreadNotifications = auth()->guard('admin')->user()->unreadNotifications()->where('type', 'App\Notifications\Add_contact');

        if ($userUnreadNotifications) {
            $userUnreadNotifications->delete();
            //  $userUnreadNotifications->delete();
            return back();
        }

    }

    public function MarkAsRead_shipments()
    {
        $userUnreadNotifications = auth()->guard('admin')->user()->unreadNotifications()->where('type', 'App\Notifications\Add_shipment');
        if ($userUnreadNotifications) {
            $userUnreadNotifications->delete();
            //  $userUnreadNotifications->delete();
            return back();
        }

    }

    public function MarkAsRead_priceOrder()
    {
        $userUnreadNotifications = auth()->guard('admin')->user()->unreadNotifications()->where('type', 'App\Notifications\Add_OrderPrice');

        if ($userUnreadNotifications) {
            $userUnreadNotifications->delete();
            //  $userUnreadNotifications->delete();
            return back();
        }
    }

    public function MarkAsRead_scanner()
    {
        $userUnreadNotifications = auth()->guard('scanner')->user()->unreadNotifications()->where('type', 'App\Notifications\send_scanner');

        if ($userUnreadNotifications) {
            $userUnreadNotifications->delete();
            //  $userUnreadNotifications->delete();
            return back();
        }

    }


}
