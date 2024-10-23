<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Book;

class CategoriesController extends BaseController {

    public static function index () {
        $categories = Category::getCatergoriesWithChildren();
        
        self::loadView('/category/categories', [
            'title' => 'Categories',
            'domain' => 'Books',
            'categories' => $categories,
        ]);
    }

    public static function category ($id) {
        $category = Category::getCategoryWithChildren($id);
        if (!$category) {
            self::LoadView('/404');
        }

        $books = Book::booksWithDataWithCategoryId($category->id);        

        self::loadView('/category/category', [
            'title' => $category->name,
            'category' => $category,
            'books' => $books,
        ]);
    }

}