<?php

// Use the query builder to fetch tasks || async
try {
    $tasks = $db->selectAll('posts');
} catch (Exception $e) {
    die('Error fetching tasks: ' . $e->getMessage());
}
