<?php

namespace App\Controllers;

use App\Models\Book;
use App\Models\Order;

class BooksController extends BaseController {

    public static function index () {
        $books = Book::booksWithData();
        
        self::loadView('/book/books', [
            'title' => 'Books',
            'domain' => 'Books',
            'books'=> $books,
        ]);
    }

    public static function book ($id) {
        $book = Book::bookWithData($id);
        if (! $book) {
            self::loadView('/404');
            return;
        }

        $orders = Order::getOrdersWithBookId($id);

        self::loadView('/book/book', [
            'title' => $book->title,
            'domain' => 'Books',
            'book'=> $book,
            'orders'=> $orders,
        ]);
    }

}