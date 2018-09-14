<?php
declare(strict_types=1);

namespace App\Repository;

class ProductRepository extends ConnectionHandler
{
    public function findProduct(): array
    {
        $statement = $this->dbh->query(
            "Select * FROM friend_shop.product"
        );

        return $statement->fetchAll();
    }
}
