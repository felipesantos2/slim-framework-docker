<?php

declare(strict_types=1);

use DI\Container;
use Slim\App;
use Slim\Factory\AppFactory;

function container(): App
{
    AppFactory::setContainer(new Container());

    return AppFactory::create();
}
