<?php
declare(strict_types=1);

namespace App\Repository;

use PDO;

class ProductRepository extends ConnectionHandler
{
    public function findAll(): array
    {
        $statement = $this->connection->prepare("Select * FROM products");
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, 'App\Model\Product');

        return $statement->fetchAll();
    }
}
