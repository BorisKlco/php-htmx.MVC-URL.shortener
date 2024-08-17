<?php

namespace App;

class Helper
{
    public static function ctime($time): string
    {
        $convert = new \DateTime($time);
        try {
            return $convert->format('d/m/Y');
        } catch (\Throwable $th) {
            return '';
        }
    }

    public static function sanitize($data): string | bool
    {
        $scheme = parse_url($data, PHP_URL_SCHEME);
        $host = parse_url($data, PHP_URL_HOST);
        $path = parse_url($data, PHP_URL_PATH);
        $query = parse_url($data, PHP_URL_QUERY);
        $query = $query ? "?$query" : '';

        if ($scheme != 'https' && $scheme != 'http') {
            return false;
        }

        $link = "$scheme://" . $host . $path . $query;
        $link = filter_var($link, FILTER_SANITIZE_URL, FILTER_VALIDATE_URL);

        if (!$link || strlen($link) > 250) {
            return false;
        }

        return $link;
    }

    public static function getCode(): string
    {
        $bytes = openssl_random_pseudo_bytes(6);
        return substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, 4);
    }
}
