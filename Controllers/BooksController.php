<?php

namespace App\Controllers;

use App\Models\Book;

class BooksController extends BaseController {

    public static function index () {
        $books = Book::all();
        
        self::loadView('/books', [
            'title' => 'Books',
            'books'=> $books,
        ]);
    }

}