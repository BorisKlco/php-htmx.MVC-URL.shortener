<?php

namespace App\Controller;

use App\View;
use App\Response;
use App\DB;

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

    public function link(string $data = ''): void
    {
        $agent = $_SERVER["HTTP_USER_AGENT"];
        $ip = strtok($_SERVER["HTTP_X_REAL_IP"], ":");
        $ip = substr($ip, 0, 8) . '***';
        $fetch = DB::fetch_user_link($data, [$agent, $ip]);

        header("Location: " . $fetch);
        die();
    }
}
