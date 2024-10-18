<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class Category extends BaseModel {

    protected function getCatergoriesWithChildren() {
        $sql = "
            SELECT 
                categories.id,
                categories.name,
                categories.description,
                parent_categories.id AS parent_category_id,
                parent_categories.name AS parent_category_name,
                GROUP_CONCAT(child_categories.name ORDER BY child_categories.id SEPARATOR ', ') AS children_categories_names,
                GROUP_CONCAT(child_categories.id ORDER BY child_categories.id SEPARATOR ', ') AS children_categories_ids
            FROM 
                categories
            LEFT JOIN 
                categories AS parent_categories ON categories.parent_id = parent_categories.id
            LEFT JOIN 
                categories AS child_categories ON child_categories.parent_id = categories.id
            GROUP BY 
                categories.id;
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Category::class);

        return $result;
    }

}