<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Order;
use App\Models\Publisher;
use App\Models\Status;
use App\Models\User;

class HomeController extends BaseController {

    public static function index () {
        $authors = Author::all();
        $books = Book::all();
        $categories = Category::all();
        $orders = Order::all();
        $publishers = Publisher::all();
        $status = Status::all();
        $users = User::all();

        $firstAuthor = Author::first();

        self::loadView('/home', [
            'title' => 'Homepage',
            'authors'=> $authors,
            'books'=> $books,
            'categories'=> $categories,
            'orders'=> $orders,
            'publishers'=> $publishers,
            'status'=> $status,
            'users'=> $users,
            'firstAuthor'=> $firstAuthor
        ]);
    }

}