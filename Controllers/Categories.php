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
        if (!$category->id) {
            return self::LoadView('/404');
        }

        $books = Book::booksWithDataWithCategoryId($category->id);        

        self::loadView('/category/category', [
            'title' => $category->name,
            'domain' => 'Books',
            'category' => $category,
            'books' => $books,
        ]);
    }

    public static function add () {
        $categories = Category::getCatergoriesWithChildren();

        self::loadView('/category/add', [
            'title' => 'Add Category',
            'domain' => 'Books',
            'categories' => $categories,
        ]);
    }

    public static function edit ($id) {
        $category = Category::getCategoryWithChildren($id);
        if (!$category) {
            return self::LoadView('/404');
        }

        $categories = Category::getCatergoriesWithChildren();

        self::loadView('/category/edit', [
            'title' => 'Edit',
            'domain' => 'Books',
            'category' => $category,
            'categories' => $categories,
        ]);
    }

    // ———— CRUD ————

    public static function create () {
        $category = new Category();
        $category->name = $_POST['name'];
        $category->description = $_POST['description'];
        $category->parent_category_id = $_POST['parent-category'] === 'none' ? null : $_POST['parent-category'];

        $category->save();

        header('Location: /categories');
    }

    public static function update ($id) {
        $category = Category::find($id);
        if (!$category || !$category->id) {
            return self::LoadView('/404');
        }

        $category->name = $_POST['name'];
        $category->description = $_POST['description'];
        $category->parent_id = $_POST['parent-category'] === 'none' ? null : $_POST['parent-category'];

        $category->update();

        header('Location: /categories');
    }    

    public static function delete ($id) {
        $category = Category::find($id);
        if (!$category || !$category->id) {
            return self::LoadView('/404');
        }

        $category->delete();

        header('Location: /categories');
    }

}