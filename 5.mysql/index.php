<?php 

    /**
     * PDO MySQL extension is enabled
     * phpinfo();
     */


// try {
//     $pdo = new PDO('mysql:host=127.0.0.1; dbname=SAMUEL', 'root', 'FGCIcisco15$'); 
// } catch (PDOException $e){
//     die('could not connect');
// }

// connecting to database
try {
    $pdo = new PDO('mysql:host=127.0.0.1; dbname=EFFIONG', 'root', 'FGCIcisco15$'); 
} catch (PDOException $e){
    die('could not connect'. $e->getMessage());
}


// fetching data
$statement= $pdo->prepare('select * from posts');

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);

$queryString = $statement->queryString;
// var_dump($statement->fetchAll());
require 'index.view.php';