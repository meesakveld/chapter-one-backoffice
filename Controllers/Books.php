<?php

namespace App\Controllers;

use App\Models\Book;

class BooksController extends BaseController {

    public static function index () {
        $books = Book::booksWithData();
        
        self::loadView('/books', [
            'title' => 'Books',
            'domain' => 'Books',
            'books'=> $books,
        ]);
    }

    public static function book ($id) {
        $book = Book::bookWithData($id);
        
        self::loadView('/book', [
            'title' => $book->title,
            'domain' => 'Books',
            'book'=> $book,
        ]);
    }

}