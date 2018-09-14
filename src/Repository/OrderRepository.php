<?php
declare(strict_types=1);

namespace App\Repository;

use App\Model\Order;
use PDO;

class OrderRepository extends ConnectionHandler
{
    public function find(string $id): Order
    {
        $statement = $this->dbh->prepare('
            SELECT "Order", orders.* 
             FROM orders
             WHERE id = :id
        ');
        $statement->bindParam(':id', $id);
        $statement->execute();

        $statement->setFetchMode(PDO::FETCH_CLASS, 'App\Model\Order');
        return $statement->fetch();
    }

    public function findAll(): array
    {
        $statement = $this->dbh->prepare("SELECT * FROM friend_shop.orders");
        $statement->execute();

        $statement->setFetchMode(PDO::FETCH_CLASS, 'App\Model\Order');
        return $statement->fetchAll();
    }
}