<?php
    $names = [
        'Alex',
        'Billy',
        'Dale'
    ];

    // foreach ($names as $name) {
    //     echo $name . ', ';
    // } 


    // ASSOCIATIVE ARRAY 

    $person = [

        'age' => 31,
        'hair' => 'brown',
        'career' => 'web developer'
    ];

    // how push to the array
    $person['name'] = 'Samuel';

    // to view ASSOCIATE ARRAY
    // var_dump($person);

    // just to view the array in a more readable format
    // echo '<pre>';
    // var_dump($person);
    // echo '</pre>';

    // to remove an item from the array
    unset($person['age']);

    // to alt a funtion or the code use die() or exit()

    //die(var_dump($person));

    // task 

    $task = [
        'title' => 'HOME WORK',
        'due' => 'NOW',
        'complete' => true,
        'assigned_to' => 'samuel effiong'
    ];

    require 'index.view.php';
?>