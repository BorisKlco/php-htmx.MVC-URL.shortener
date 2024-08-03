<?php

namespace App\Controller;

use App\View;
use App\Response;

class Home extends Response
{

    public function main(): array
    {
        $this->status = 200;
        $this->content = View::make('home');
        return $this->response();
    }
}
