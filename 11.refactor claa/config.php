<?php

return [
    'database' => [
        'name' => 'EFFIONG',
        'username'=>'root',
        'password' => 'FGCIcisco15$',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION, // Use ERRMODE_EXCEPTION for better error handling
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ //// Fetch data as objects by default
        ]
    ]
];