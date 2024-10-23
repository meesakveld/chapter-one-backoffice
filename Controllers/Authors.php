<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;

class AuthorsController extends BaseController {

    public static function index () {

        $authors = Author::all();
        
        self::loadView('/author/authors', [
            'title' => 'Authors',
            'domain' => 'Books',
            'authors' => $authors,
        ]);
    }

    public static function author ($id) {
        $author = Author::find($id);
        if (!$author) {
            self::LoadView('/404');
        }
        $books = Book::booksWithDataWithAuthorId($author->id);

        self::loadView('/author/author', [
            'title' => $author->name,
            'author' => $author,
            'books' => $books,
        ]);
    }
}