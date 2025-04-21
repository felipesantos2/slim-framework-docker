<?php

declare(strict_types=1);

use app\controllers\HomeController;

$app = container();

$app->get('/', [HomeController::class, 'index']);

$app->run();
