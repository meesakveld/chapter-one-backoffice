<?php

namespace App\Controllers;

use App\Models\Author;

class AuthorsController extends BaseController {

    public static function index () {

        $authors = Author::all();
        
        self::loadView('/authors', [
            'title' => 'Authors',
            'authors' => $authors,
        ]);
    }

}