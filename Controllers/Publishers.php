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
        if (!$publisher || !$publisher->id) {
            return self::LoadView('/404');
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

    public static function edit ($id) {
        $publisher = Publisher::find($id);
        if (!$publisher || !$publisher->id) {
            return self::LoadView('/404');
        }

        self::loadView('/publisher/edit', [
            'title' => 'Edit',
            'domain' => 'Books',
            'publisher' => $publisher,
        ]);
    }

    // ———— CRUD ————
    public static function create () {
        if( !isset($_FILES['logo']) || !$_FILES['logo']['size'] > 0 ) {
            return exit('No file uploaded');
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

        header('Location: /publishers/');
    }

    public static function update (int $id) {
        $publisher = Publisher::find($id);
        if (!$publisher) {
            return exit('Publisher not found');
        }

        $publisher->name = $_POST['name'];
        $publisher->email = $_POST['email'];

        if (isset($_FILES['logo']) && $_FILES['logo']['size'] > 0) {
            $image_path = '../public/uploaded-images/' . $publisher->logo_path;
            if (file_exists($image_path)) {
                unlink($image_path);
            }

            $tmp_location = $_FILES['logo']['tmp_name'];
            $file_name = $_FILES['logo']['name'];
            $uuid = uniqid();
            $newLocation = '../public/uploaded-images/' . $uuid . '-' . $file_name;

            move_uploaded_file($tmp_location, $newLocation);

            $publisher->logo_path = $uuid . '-' . $file_name;
        }

        $publisher->update();

        header('Location: /publishers/' . $publisher->id);

    }

    public static function delete (int $id) {
        $publisher = Publisher::find($id);
        if (!$publisher) {
            return exit('Publisher not found');
        }

        $image_path = '../public/uploaded-images/' . $publisher->logo_path;

        $publisher->delete();
        
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        header('Location: /publishers/');
    }

}