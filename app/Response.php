<?php

namespace App;

use App\View;

class Response
{
    protected int $status;
    protected View $content;

    public function response()
    {
        return [$this->status, $this->content];
    }
}
