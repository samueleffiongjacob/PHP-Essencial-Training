<?php

return [
    'database' => [
        'name' => $_ENV['DB_NAME'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'connection' => $_ENV['DB_CONNECTION'] . ':host=' . $_ENV['DB_HOST'],
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]
    ]
];
