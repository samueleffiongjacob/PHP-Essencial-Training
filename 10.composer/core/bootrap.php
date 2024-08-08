<?php

use Dotenv\Dotenv;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$app = [];

$app['config'] = require 'config.php';

// asyn way
try{
    $app['database'] = new QueryBuilder(
        Connection::make($app['config']['database'])
    );
} catch (Exception $e) {
    die('Bootstrap error: ' . $e->getMessage());
} 

