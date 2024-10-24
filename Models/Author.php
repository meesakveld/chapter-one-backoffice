<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class Author extends BaseModel {

    protected function first() {
        $sql = 'SELECT * FROM authors LIMIT 1';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $db_items = $stmt->fetchAll();

        return $db_items;
    }

    protected function allWithSearchAndFilter($search, $filterNationality, $sortName) {
        $sql = "
            SELECT *
            FROM authors
            WHERE 1=1
            " . (!empty($search) ? "AND (name LIKE :search OR bio LIKE :search)" : "") . "
            " . (!empty($filterNationality) ? "AND nationality = :nationality" : "") . "
            " . (!empty($sortName) ? "ORDER BY name " . ($sortName === 'desc' ? "DESC" : "ASC") : "") . "
        ";
        $stmt = $this->db->prepare($sql);
        if (!empty($search)) {
            $stmt->bindValue(':search', '%' . $search . '%');
        }
        if (!empty($filterNationality)) {
            $stmt->bindValue(':nationality', $filterNationality);
        }
        $stmt->execute();

        $db_items = $stmt->fetchAll(PDO::FETCH_CLASS, Author::class);

        return $db_items;
    }

    protected function getUniqueNationalitiesFromAuthors() {
        $sql = "
            SELECT DISTINCT nationality
            FROM authors;
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $db_items = $stmt->fetchAll();

        return $db_items;
    }

}