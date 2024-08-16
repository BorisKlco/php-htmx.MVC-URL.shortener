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

    public static function fetch_all(): array
    {
        $db = self::$pdo;

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
        $offset = abs($page) * 10;

        $sql = "SELECT * FROM links LIMIT 10 OFFSET :offset";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }
}
