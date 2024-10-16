<?php

namespace App\Controllers;

class PublishersController extends BaseController {

    public static function index () {
        
        self::loadView('/publishers', [
            'title' => 'Publishers',
        ]);
    }

}