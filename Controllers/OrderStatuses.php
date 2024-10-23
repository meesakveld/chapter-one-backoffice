<?php

namespace App\Controllers;

use App\Models\Status;

class OrderStatusesController extends BaseController {

    public static function index () {

        $statuses = Status::getStatusesWithChildren();
        
        self::loadView('/order-status/order-statuses', [
            'title' => 'Statuses',
            'domain' => 'Orders',
            'statuses' => $statuses,
        ]);
    }

}