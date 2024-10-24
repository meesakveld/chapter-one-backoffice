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

    public function update () {
        $query = $this->db->prepare('UPDATE publishers SET name = :name, email = :email, logo_path = :logo_path WHERE id = :id');
        $query->execute([
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'logo_path' => $this->logo_path,
        ]);
    }

}