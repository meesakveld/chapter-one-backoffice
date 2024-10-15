<?php

namespace App\Models;

use App\Models\BaseModel;

class Order extends BaseModel {

    protected function totalSales() {
        $sql = 'SELECT SUM(total_price) AS total_income FROM orders';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result ? $result['total_income'] : 0;
    }

    protected function totalSalesPerMonth() {
        $sql = "
            SELECT 
                DATE_FORMAT(orders.order_date, '%Y-%m') AS month, 
                SUM(book_order.price * book_order.quantity) AS total_revenue 
            FROM 
                orders 
            JOIN 
                book_order ON orders.id = book_order.order_id 
            GROUP BY 
                DATE_FORMAT(orders.order_date, '%Y-%m') 
            ORDER BY 
                month;
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result ? $result : [];
    }

    protected function totalBooksSold() {
        $sql = 'SELECT SUM(quantity) AS total_books_sold FROM book_order';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result ? (int)$result['total_books_sold'] : 0;
    }

}