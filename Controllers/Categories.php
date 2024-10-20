<?php

namespace App\Controllers;

use App\Models\Category;

class CategoriesController extends BaseController {

    public static function index () {
        $categories = Category::getCatergoriesWithChildren();
        
        self::loadView('/categories', [
            'title' => 'Categories',
            'domain' => 'Books',
            'categories' => $categories,
        ]);
    }

}