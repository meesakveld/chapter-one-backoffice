<?php

namespace App\Models;

use App\Models\BaseModel;

class Author extends BaseModel {

    protected function first() {
        $sql = 'SELECT * FROM authors LIMIT 1';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $db_items = $stmt->fetchAll();

        return $db_items;
    }
}