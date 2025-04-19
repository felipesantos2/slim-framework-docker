<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Symfony\Component\Dotenv\Dotenv;

require '../vendor/autoload.php';

$dotenv = new Dotenv;

$dotenv->loadEnv(dirname(__DIR__, 1).'/.env');

$config = ORMSetup::createAttributeMetadataConfiguration(paths: [dirname(__DIR__, 1).'/config'], isDevMode: true);

$connection = DriverManager::getConnection(['driver' => 'pdo_sqlite', 'path' => dirname(__DIR__, 1).'/database/database.sqlite'], $config);

$entityManager = new EntityManager($connection, $config);

echo 'Olá, Mundo!<br>';
echo 'Olá, Docker!';
