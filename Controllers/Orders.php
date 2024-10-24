<?php

namespace App\Controllers;

use App\Models\BookOrder;
use App\Models\Order;

class OrdersController extends BaseController {

    public static function index () {

        $orders = Order::getOrdersWithChildren();
        
        self::loadView('/order/orders', [
            'title' => 'Orders',
            'domain' => 'Orders',
            'orders' => $orders,
        ]);
    }

    public static function order ($id) {
        $order = Order::getOrderWithId($id);
        if (!$order->id) {
            return self::LoadView('/404');
        }

        self::loadView('/order/order', [
            'title' => $order->id,
            'domain' => 'Orders',
            'order' => $order,
        ]);


    }
}