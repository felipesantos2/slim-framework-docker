<?php

declare(strict_types=1);

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Symfony\Component\Dotenv\Dotenv;


date_default_timezone_set('America/Sao_Paulo');


require __DIR__ . '/../vendor/autoload.php';

// -----------------------------------------
(new Dotenv())
    ->loadEnv(dirname(__DIR__) . '/.env');

// -----------------------------------------
$entitiesPath[] = dirname(__DIR__) . '/app/database/entities/';

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: $entitiesPath,
    isDevMode: true
);

$connection = DriverManager::getConnection(params: [
    'driver'   => 'pdo_mysql',
    'user'     => $_ENV['DB_USER'] ?? '',
    'password' => $_ENV['DB_PASSWORD'] ?? '',
    'dbname'   => $_ENV['DB_DATABASE'] ?? '',
], config: $config);

$entityManager = new EntityManager($connection, $config);
