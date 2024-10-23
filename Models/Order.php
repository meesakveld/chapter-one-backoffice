<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class Order extends BaseModel
{

    protected function totalSales()
    {
        $sql = 'SELECT SUM(total_price) AS total_income FROM orders';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result ? $result['total_income'] : 0;
    }

    protected function totalSalesPerMonth()
    {
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

    protected function totalBooksSold()
    {
        $sql = 'SELECT SUM(quantity) AS total_books_sold FROM book_order';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result ? (int) $result['total_books_sold'] : 0;
    }

    protected function getOrdersWithChildren()
    {
        $sql = "
            SELECT 
                orders.id,
                SUM(book_order.quantity) AS total_items,  -- Total number of items in the order
                SUM(book_order.quantity * book_order.price) AS total_price,  -- Total price of the order
                orders.order_date,  -- Order date
                status.name AS status,  -- Order status
                users.id AS user_id,  -- User ID
                CONCAT(users.firstname, ' ', users.lastname) AS user_full_name  -- Full name of the user (firstname + lastname)
            FROM 
                orders
            LEFT JOIN 
                book_order ON orders.id = book_order.order_id  -- Join to get the order items
            LEFT JOIN 
                users ON orders.user_id = users.id  -- Join to get the user's full name
            LEFT JOIN 
                status ON orders.status_id = status.id  -- Join to get the order status
            GROUP BY 
                orders.id, 
                orders.order_date, 
                status.name, 
                users.firstname, 
                users.lastname;
        ";

        // Execute the query and return the result as an array of Order objects
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Order::class);

        return $result;
    }

    protected function getOrdersWithBookId($bookId)
    {
        $sql = "
        SELECT 
            orders.id,
            SUM(book_order.quantity) AS total_items,  -- Total number of items in the order
            SUM(book_order.quantity * book_order.price) AS total_price,  -- Total price of the order
            orders.order_date,  -- Order date
            status.name AS status,  -- Order status
            users.id AS user_id,  -- User ID
            CONCAT(users.firstname, ' ', users.lastname) AS user_full_name  -- Full name of the user (firstname + lastname)
        FROM 
            orders
        LEFT JOIN 
            book_order ON orders.id = book_order.order_id  -- Join to get the order items
        LEFT JOIN 
            users ON orders.user_id = users.id  -- Join to get the user's full name
        LEFT JOIN 
            status ON orders.status_id = status.id  -- Join to get the order status
        WHERE 
            orders.id IN (
                SELECT order_id 
                FROM book_order 
                WHERE book_id = :bookId
            )
        GROUP BY 
            orders.id, 
            orders.order_date, 
            status.name, 
            users.firstname, 
            users.lastname;
    ";

        // Execute the query and return the result as an array of Order objects
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['bookId' => $bookId]);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Order::class);

        return $result;
    }

    protected function getOrdersWithUserId($userId)
    {
        $sql = "
        SELECT 
            orders.id,
            SUM(book_order.quantity) AS total_items,  -- Total number of items in the order
            SUM(book_order.quantity * book_order.price) AS total_price,  -- Total price of the order
            orders.order_date,  -- Order date
            status.name AS status,  -- Order status
            users.id AS user_id,  -- User ID
            CONCAT(users.firstname, ' ', users.lastname) AS user_full_name  -- Full name of the user (firstname + lastname)
        FROM 
            orders
        LEFT JOIN 
            book_order ON orders.id = book_order.order_id  -- Join to get the order items
        LEFT JOIN 
            users ON orders.user_id = users.id  -- Join to get the user's full name
        LEFT JOIN 
            status ON orders.status_id = status.id  -- Join to get the order status
        WHERE 
            orders.user_id = :userId
        GROUP BY 
            orders.id, 
            orders.order_date, 
            status.name, 
            users.firstname, 
            users.lastname;
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['userId' => $userId]);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Order::class);

        return $result;

    }

}