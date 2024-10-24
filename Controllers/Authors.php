<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;

class AuthorsController extends BaseController {

    public static function index () {

        // Get search params
        $search = $_GET['search'] ?? '';
        $filterNationality = $_GET['filter-nationality'] ?? '';
        $sortName = $_GET['sort-name'] ?? 'asc';

        $authors = Author::allWithSearchAndFilter($search, $filterNationality, $sortName);
        $nationalities = Author::getUniqueNationalitiesFromAuthors();
        
        self::loadView('/author/authors', [
            'title' => 'Authors',
            'domain' => 'Books',
            'authors' => $authors,
            'nationalities' => $nationalities,
            'search' => $search,
            'filterNationality' => $filterNationality,
            'sortName' => $sortName,
        ]);
    }

    public static function author ($id) {
        $author = Author::find($id);
        if (!$author) {
            self::LoadView('/404');
        }
        $books = Book::booksWithDataWithAuthorId($author->id);

        self::loadView('/author/author', [
            'title' => $author->name,
            'domain' => 'Books',
            'author' => $author,
            'books' => $books,
        ]);
    }
}