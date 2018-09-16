<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\Filter;
use App\Entity\Order;
use App\Service\FilterManager;
use PDO;

class OrderRepository extends ConnectionHandler
{
    public function findByFilter(Filter $filter): array
    {
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        $statement = $this->connection->prepare('
            SELECT * 
             FROM orders
             WHERE name LIKE :name
             OR address LIKE :address
             OR deliveryType LIKE :deliveryType
             LIMIT :limit
             OFFSET :offset
        ');
        $statement->bindValue(':name', $this->sanitizeProperty($filter->getDataByKey('name')));
        $statement->bindValue(':address', $this->sanitizeProperty($filter->getDataByKey('address')));
        $statement->bindValue(':deliveryType', $this->sanitizeProperty($filter->getDataByKey('deliveryType')));
        $statement->bindValue(':limit', FilterManager::DEFAULT_RECORDS_PER_PAGE, PDO::PARAM_INT);
        $statement->bindValue(':offset', $filter->getOffset(), PDO::PARAM_INT);
        $statement->execute();

        $st = $statement->setFetchMode(PDO::FETCH_CLASS, 'App\Entity\Order');
        $a = $statement->fetchAll();
        return $a;
    }

    public function findAll(Filter $filter): array
    {
        $statement = $this->connection->prepare('
            SELECT *
            FROM friend_shop.orders
            LIMIT :limit
            OFFSET :offset
            ');
        $statement->bindValue(':limit', FilterManager::DEFAULT_RECORDS_PER_PAGE, PDO::PARAM_INT);
        $statement->bindValue(':offset', $filter->getOffset(), PDO::PARAM_INT);
        $statement->execute();

        $statement->setFetchMode(PDO::FETCH_CLASS, 'App\Entity\Order');
        return $statement->fetchAll();
    }

    public function findCount()
    {
        $statement = $this->connection->prepare('
            SELECT COUNT(*) 
            FROM friend_shop.orders
            ');
        $statement->execute();

        return $statement->fetchColumn();
    }

    public function save(Order $order)
    {
        $statement = $this->connection->prepare(
            'INSERT INTO orders 
                (name, address, deliveryType, urgent) 
            VALUES 
                (:name, :address , :deliveryType, :urgent)
        ');

        $statement->bindValue(':name', $order->getName());
        $statement->bindValue(':address', $order->getAddress());
        $statement->bindValue(':deliveryType', $order->getDeliveryType());
        $statement->bindValue(':urgent', $order->isUrgent(), PDO::PARAM_BOOL);

        return $statement->execute();
    }

    private function sanitizeProperty($property)
    {
        if (!empty($property)) {
            return "%$property%";
        }

        return '';
    }
}
