<?php
declare(strict_types=1);

namespace App\Repository;

use InvalidArgumentException;
use PDO;

abstract class ConnectionHandler
{
    protected $connection;

    public function __construct(
        string $host = 'eu-cdbr-west-02.cleardb.net',
        string $dbName = 'heroku_5889624e54c8401',
        string $username = 'bf8bbdcddbe0bc',
        string $password = 'c2a60147'
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
