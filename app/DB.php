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

    public static function fetch_all(int $page): array
    {
        $db = self::$pdo;

        $offset = abs($page) * 10;

        $sql = "SELECT * FROM links LIMIT 10 OFFSET :offset";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

    public static function fetch_user_link(string $code): string
    {
        $db = self::$pdo;

        $sql = "SELECT link FROM links WHERE code = :code";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':code', $code, PDO::PARAM_STR);
        try {
            $stmt->execute();
            $result = $stmt->fetch();
            return $result['link'];
        } catch (\Throwable $th) {
            return 'https://google.com';
        }
    }

    public static function if_exist(string $code): array | bool
    {
        $db = self::$pdo;
        $sql = "INSERT INTO links(link, code) VALUES(:link, :code)";
        $sql = "SELECT id FROM links WHERE code = :code";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':code', $code, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result;
    }

    public static function add_link(string $link, string $code): void
    {
        $db = self::$pdo;
        $sql = "INSERT INTO links(link, code) VALUES(:link, :code)";

        try {
            $stmt = $db->prepare($sql);

            $stmt->execute([
                ':link' => $link,
                ':code' => $code
            ]);

            $id = $db->lastInsertId();
        } catch (\Throwable $th) {
            echo "add link error " . $th;
        }
    }
}
