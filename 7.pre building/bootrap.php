<?php

$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

// sychronous
// return new QueryBuilder(
//     Connection::make($config['database'])
// );

// asyn way
try{
    return new QueryBuilder(
        Connection::make($config['database'])
    );
} catch (Exception $e) {
    die('Bootstrap error: ' . $e->getMessage());
}