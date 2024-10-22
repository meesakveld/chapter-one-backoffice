<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class Book extends BaseModel {

    protected function totalBooks() {
        $sql = "SELECT SUM(books.stock) as total_stock FROM books;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result ? (int)$result['total_stock'] : 0;
    }
    
    protected function booksWithData() {
        $sql = "
            SELECT 
                books.id,
                books.title, 
                authors.id AS author_id, 
                authors.name AS author, 
                books.price, 
                books.stock, 
                books.published_date AS published, 
                publishers.name AS publisher,
                publishers.id AS publisher_id,
                GROUP_CONCAT(categories.id SEPARATOR ', ') AS category_ids,
                GROUP_CONCAT(categories.name SEPARATOR ', ') AS category_names
            FROM 
                books 
            JOIN 
                authors ON books.author_id = authors.id 
            JOIN 
                publishers ON books.publisher_id = publishers.id
            JOIN 
                book_category ON books.id = book_category.book_id
            JOIN 
                categories ON book_category.category_id = categories.id
            GROUP BY 
                books.id;
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Book::class);

        return $result;
    }

    protected function bookWithData($id) {
        $sql = "
            SELECT 
                books.id,
                books.title, 
                authors.id AS author_id, 
                authors.name AS author, 
                books.price, 
                books.stock, 
                books.published_date AS published, 
                publishers.name AS publisher,
                publishers.id AS publisher_id,
                GROUP_CONCAT(categories.id SEPARATOR ', ') AS category_ids,
                GROUP_CONCAT(categories.name SEPARATOR ', ') AS category_names
            FROM 
                books 
            JOIN 
                authors ON books.author_id = authors.id 
            JOIN 
                publishers ON books.publisher_id = publishers.id
            JOIN 
                book_category ON books.id = book_category.book_id
            JOIN 
                categories ON book_category.category_id = categories.id
            WHERE 
                books.id = :id
            GROUP BY 
                books.id;
        ";
        $params = [
            'id' => $id
        ];
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetchObject(Book::class);

        return $result;
    }

    protected function booksWithDataWithAuthorId($author_id) {
        $sql = "
            SELECT 
                books.id,
                books.title, 
                authors.id AS author_id, 
                authors.name AS author, 
                books.price, 
                books.stock, 
                books.published_date AS published, 
                publishers.name AS publisher,
                publishers.id AS publisher_id,
                GROUP_CONCAT(categories.id SEPARATOR ', ') AS category_ids,
                GROUP_CONCAT(categories.name SEPARATOR ', ') AS category_names
            FROM 
                books 
            JOIN 
                authors ON books.author_id = authors.id 
            JOIN 
                publishers ON books.publisher_id = publishers.id
            JOIN 
                book_category ON books.id = book_category.book_id
            JOIN 
                categories ON book_category.category_id = categories.id
            WHERE 
                authors.id = :author_id
            GROUP BY 
                books.id;
        ";
        $params = [
            'author_id' => $author_id
        ];
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Book::class);

        return $result;
    }
}