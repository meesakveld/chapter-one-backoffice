<?php

namespace App\Models;

use App\Models\BaseModel;

class Book extends BaseModel {

    protected function totalBooks() {
        $sql = "SELECT SUM(books.stock) as total_stock FROM books;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result ? (int)$result['total_stock'] : 0;
    }
    
}