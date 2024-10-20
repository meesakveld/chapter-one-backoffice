<?php

namespace App\Controllers;

use App\Models\Publisher;

class PublishersController extends BaseController {

    public static function index () {

        $publishers = Publisher::all();
        
        self::loadView('/publishers', [
            'title' => 'Publishers',
            'domain' => 'Books',
            'publishers' => $publishers,
        ]);
    }

}