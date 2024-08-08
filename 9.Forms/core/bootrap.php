<?php


$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

// sychronous
// return new QueryBuilder(
//     Connection::make($config['database'])
// );

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