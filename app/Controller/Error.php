<?php

namespace App\Controller;

use App\View;
use App\Response;

class Error extends Response
{

    public function RouteNotFound(): array
    {
        $this->status = 404;
        $this->content = View::make('Error/RouteNotFound');
        return $this->response();
    }
}
