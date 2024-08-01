<?php

namespace App\Controller;

use App\View;

class Home
{
    public function main(): View
    {
        return View::make('home', ['params' => 'random']);
    }

    public function error()
    {
        echo 'bad route';
    }
}
