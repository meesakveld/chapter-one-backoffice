<?php

namespace App\Controllers;

use App\Models\Order;

class OrdersController extends BaseController {

    public static function index () {

        $orders = Order::getOrdersWithChildren();
        
        self::loadView('/orders', [
            'title' => 'Orders',
            'domain' => 'Orders',
            'orders' => $orders,
        ]);
    }

}