<?php

namespace App\Models;

use App\Models\BaseModel;

class Publisher extends BaseModel {

    public function save () {
        $query = $this->db->prepare('INSERT INTO publishers (name, email, logo_path) VALUES (:name, :email, :logo_path)');
        $query->execute([
            'name' => $this->name,
            'email' => $this->email,
            'logo_path' => $this->logo_path,
        ]);
    }

}