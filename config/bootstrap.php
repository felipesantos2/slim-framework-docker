<?php

declare(strict_types=1);

use Doctrine\DBAL\DriverManager;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__.'/../vendor/autoload.php';

// -----------------------------------------
(new Dotenv())
    ->loadEnv(dirname(__DIR__).'/.env');

// -----------------------------------------
$connection = DriverManager::getConnection(params: [
    'driver'   => 'pdo_mysql',
    'user'     => $_ENV['DB_USER'] ?? '',
    'password' => $_ENV['DB_PASSWORD'] ?? '',
    'dbname'   => $_ENV['DB_DATABASE'] ?? '',
]);
