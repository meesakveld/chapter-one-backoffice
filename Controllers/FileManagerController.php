<?php

namespace App\Controllers;

class FileManagerController extends BaseController {

    public static function index () {

        $images = scandir('../public/uploaded-images');
        
        self::loadView('/file-manager', [
            'title' => 'File Manager',
            'domain' => 'File Manager',
            'images' => $images
        ]);

    }

}