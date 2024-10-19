<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class Status extends BaseModel {

    protected function getStatusesWithChildren() {
        $sql = "
            SELECT
                status.id,
                status.name,
                COUNT(orders.id) AS total_orders
            FROM
                status
            LEFT JOIN
                orders ON status.id = orders.status_id
            GROUP BY
                status.id
            ORDER BY
                status.id;
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Status::class);

        return $result;

    }

}