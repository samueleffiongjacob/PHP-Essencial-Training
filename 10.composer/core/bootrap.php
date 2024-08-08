<?php


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

// App::bind('config', require 'config.php');


// App::blind('database', new QueryBuilder (
//     Connection::make(App::get['config'][database])
// ));