<?php 

    /**
     * PDO MySQL extension is enabled
     * phpinfo();
     */




// connecting to database
try {
    $pdo = new PDO('mysql:host=127.0.0.1;port=3307; dbname=effiong', 'root', 'samdev'); // always specify port  should incase it not running on 3306
} catch (PDOException $e){
    die('could not connect'. $e->getMessage());
}


// fetching data
$statement= $pdo->prepare('select * from wallets');

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);

$queryString = $statement->queryString;
// var_dump($statement->fetchAll());
require 'index.view.php';

