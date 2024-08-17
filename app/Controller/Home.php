<?php

namespace App\Controller;

use App\View;
use App\Response;
use App\DB;

class Home extends Response
{

    public function index(): array
    {
        // echo '<pre>';
        // print_r($_SERVER);
        $this->status = 200;
        $this->content = View::make(
            'home',
            [
                'title' => 'Home Page'
            ]
        );
        return $this->response();
    }

    public function link(string $data = ''): void
    {
        $fetch = DB::fetch_user_link($data);

        header("Location: " . $fetch);
        die();
    }

    public function test()
    {
        return [200, '<img src="static/qr.svg">'];
    }
}
