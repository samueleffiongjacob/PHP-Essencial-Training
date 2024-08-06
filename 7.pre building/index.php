<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$db = require 'bootrap.php'; 

// u can name query anything || sync
// $tasks = $db->selectAll('posts');

// Use the query builder to fetch tasks || async
try {
    $tasks = $db->selectAll('posts');
} catch (Exception $e) {
    die('Error fetching tasks: ' . $e->getMessage());
}

// echo '<pre>';
// print_r($tasks);
// echo '</pre>';

require 'index.view.php';
