<?php

namespace App\Controller;

use App\View;
use App\Response;

class Home extends Response
{

    public function index(): array
    {
        $this->status = 200;
        $this->content = View::make(
            'home',
            [
                'title' => 'Home Page'
            ]
        );
        return $this->response();
    }

    public function link(string $data = ''): array
    {
        echo $data;
        $this->status = 200;
        $this->content = View::make(
            'home',
            [
                'title' => 'Home Page'
            ]
        );
        return $this->response();
    }

    public function test()
    {
        return [200, '<img src="static/qr.svg">'];
    }
}
