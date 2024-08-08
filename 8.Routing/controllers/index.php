<?php

$name = 'SAMUEL EFFIONG';
// Use the query builder to fetch tasks || async
try {
    $tasks = $app['database'] ->selectAll('posts');
} catch (Exception $e) {
    die('Error fetching tasks: ' . $e->getMessage());
}

require 'views/index.view.php';