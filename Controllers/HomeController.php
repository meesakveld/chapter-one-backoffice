<?php

namespace App\Controllers;

use App\Models\Book;
use App\Models\Order;
use App\Models\User;

class HomeController extends BaseController {

    public static function index () {
        $totalSales = Order::totalSales();
        $totalBooksSold = Order::totalBooksSold();
        $totalUsers = User::totalUsers();
        $totalSalesPerMonth = Order::totalSalesPerMonth();
        $totalBooks = Book::totalBooks();

        self::loadView('/home', [
            'title' => 'Dashboard',
            'totalSales'=> $totalSales,
            'totalBooksSold'=> $totalBooksSold,
            'totalUsers'=> $totalUsers,
            'totalSalesPerMonth'=> $totalSalesPerMonth,
            'totalBooks'=> $totalBooks,
        ]);
    }

}