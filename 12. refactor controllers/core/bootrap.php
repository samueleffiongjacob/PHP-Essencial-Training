<?php

use Dotenv\Dotenv;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
// Bind the configuration array to the container
App::bind('config', require 'config.php');

// Bind the database connection to the container using the correct syntax
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
