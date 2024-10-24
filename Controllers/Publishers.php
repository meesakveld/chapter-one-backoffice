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

    public static function add () {
        self::loadView('/publisher/add', [
            'title' => 'Add Publisher',
            'domain' => 'Books',
        ]);
    }

    // ———— CRUD ————
    public static function create () {
        if( !isset($_FILES['logo']) || !$_FILES['logo']['size'] > 0 ) {
            exit('No file uploaded');
        }

        $publisher = new Publisher();
        $publisher->name = $_POST['name'];
        $publisher->email = $_POST['email'];

        $tmp_location = $_FILES['logo']['tmp_name'];
        $file_name = $_FILES['logo']['name'];
        $uuid = uniqid();
        $newLocation = '../public/uploaded-images/' . $uuid . '-' . $file_name;

        move_uploaded_file($tmp_location, $newLocation);

        $publisher->logo_path = $uuid . '-' . $file_name;
        $publisher->save();

        print_r($publisher);

        header('Location: /publishers/');
    }

}