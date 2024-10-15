<?php

namespace App\Models;

use App\Models\BaseModel;

class User extends BaseModel {

    protected function totalUsers() {
        $sql = "SELECT COUNT(*) AS total_users FROM users";
        $stmt = $this->db->query($sql);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result ? (int)$result['total_users'] : 0;
    }

}