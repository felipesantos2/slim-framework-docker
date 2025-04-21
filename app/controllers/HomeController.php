<?php

declare(strict_types=1);

namespace app\controllers;

use app\library\Login;

class HomeController
{
    public function __construct(
        private ?Login $login
    ) {}

    public function index(): void
    {
        // dd($this->login->login());
    }
}
