<?php
declare(strict_types=1);

namespace App\Repository;

use InvalidArgumentException;
use PDO;

abstract class ConnectionHandler
{
    protected $connection;

    public function __construct(
        string $host = 'localhost',
        string $dbName = 'friend_shop',
        string $username = 'root',
        string $password = ''
    )
    {
        try {
            $this->connection = new PDO(
                'mysql:host=' . $host . ';dbname=' . $dbName . '',
                $username,
                $password
            );
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            throw new InvalidArgumentException(sprintf('%s must be set', $e->getMessage()));
        }
    }
}
