<?php

namespace App\Controllers;

use App\Models\Publisher;
use App\Models\Book;

class PublishersController extends BaseController {

    public static function index () {

        $publishers = Publisher::all();
        
        self::loadView('/publisher/publishers', [
            'title' => 'Publishers',
            'domain' => 'Books',
            'publishers' => $publishers,
        ]);
    }

    public static function publisher ($id) {
        $publisher = Publisher::find($id);
        if (!$publisher) {
            self::LoadView('/404');
        }
        $books = Book::booksWithDataWithPublisherId($publisher->id);

        self::loadView('/publisher/publisher', [
            'title' => $publisher->name,
            'domain' => 'Books',
            'publisher' => $publisher,
            'books' => $books,
        ]);
    }

}