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
        if (!$book->id) {
            return self::loadView('/404');
        }

        $orders = Order::getOrdersWithBookId($id);

        self::loadView('/book/book', [
            'title' => $book->title,
            'domain' => 'Books',
            'book'=> $book,
            'orders'=> $orders,
        ]);
    }

    // ———— API ————
    public static function api () {
        $searchQuery = $_GET['q'] ?? '';

        $books = Book::booksWithDataWithSearch($searchQuery);
        echo json_encode($books);
    }

}