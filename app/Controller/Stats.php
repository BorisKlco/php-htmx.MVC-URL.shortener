<?php

namespace App\Controller;

use App\View;
use App\Response;

class Stats extends Response
{

    public function index(): array
    {
        $this->status = 200;
        $this->content = View::make(
            'stats',
            [
                'title' => 'Stats'
            ]
        );
        return $this->response();
    }

    public function generate(): array
    {
        $scheme = parse_url($_POST['link'], PHP_URL_SCHEME);
        $host = parse_url($_POST['link'], PHP_URL_HOST);
        $path = parse_url($_POST['link'], PHP_URL_PATH);
        $query = parse_url($_POST['link'], PHP_URL_QUERY);
        $query = $query ? "?$query" : '';

        if ($scheme != 'https' && $scheme != 'http') {
            return $this->wrongLink();
        }

        $link = "$scheme://" . $host . $path . $query;
        $link = filter_var($link, FILTER_VALIDATE_URL);

        if (!$link) {
            return $this->wrongLink();
        }

        $this->status = 200;
        $this->content = View::make(
            'stats',
            [
                'title' => 'Analytics'
            ]
        );
        return [200,$link];
        return $this->response();
    }

    public function wrongLink(): array
    {
        $this->status = 418;
        $this->content = View::make(
            'Error/WrongLink',
            [
                'title' => 'WrongLink'
            ]
        );

        return [418,'<input name="link" placeholder="Pleas fill valid link." class="form-control" type="url">'];
        return $this->response();
    }
}
