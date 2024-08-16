<?php

namespace App;

use PDO;

class DB
{
    private static \PDO $pdo;

    public function __construct(array $config = [])
    {
        $defaultOptions = [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            static::$pdo = new PDO(
                'mysql:host=' . $config['host'] . ';dbname=' . $config['db'],
                $config['usr'],
                $config['psw'],
                $config['options'] ?? $defaultOptions
            );
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    }

    public static function connection(): \PDO
    {
        return static::$pdo;
    }

    public static function test()
    {
        return self::$pdo;
    }
}
