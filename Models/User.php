<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\Order;
use PDO;

class User extends BaseModel {

    protected function totalUsers() {
        $sql = "SELECT COUNT(*) AS total_users FROM users";
        $stmt = $this->db->query($sql);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result ? (int)$result['total_users'] : 0;
    }

    public function getFullName() {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function totalOrders() {
        $sql = "SELECT COUNT(*) AS total_orders FROM orders WHERE user_id = :user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['user_id' => $this->id]);

        $result = $stmt->fetch();

        return $result ? (int)$result['total_orders'] : 0;
    }

    public function totalSpent() {
        $sql = "
            SELECT 
                SUM(book_order.price * book_order.quantity) AS total_spent
            FROM 
                orders 
            JOIN 
                book_order ON orders.id = book_order.order_id
            WHERE 
                orders.user_id = :user_id
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['user_id' => $this->id]);

        $result = $stmt->fetch();

        return $result ? $result['total_spent'] : 0;
    }
}