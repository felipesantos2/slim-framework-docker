<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Symfony\Component\Dotenv\Dotenv;

require '../vendor/autoload.php';

$dotenv = new Dotenv();

$dotenv->loadEnv(dirname(__DIR__, 1) . '/.env');


$entitiesPath[] = dirname(__DIR__, 1) . '/app/database/entities/';

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: $entitiesPath,
    isDevMode: true
);

$connection = DriverManager::getConnection(params: [
    'driver' => 'pdo_mysql',
    'user' => $_ENV['DB_USER'] ?? '',
    'password' => $_ENV['DB_PASSWORD'] ?? '',
    'dbname' => $_ENV['DB_DATABASE'] ?? '',
], config: $config);

$entityManager = new EntityManager($connection, $config);

echo 'Olá, Mundo!<br>';
echo 'Olá, Docker!';
