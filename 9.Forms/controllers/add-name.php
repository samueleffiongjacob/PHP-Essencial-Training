<?php 

// var_dump($_SERVER);
// var_dump($_REQUEST);
// var_dump($_GET);
// var_dump($_GET['name']);
// var_dump($_POST); 

// var_dump('you typed' .$_POST['name']);

$app['database']->insert('users' , [
    'name' => $_POST['name'],

]);

header('Location: /');