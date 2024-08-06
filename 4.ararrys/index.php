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
        'title' => 'Finish WORK',
        'due' => 'today',
        'complete' => false,
        'assigned_to' => 'samuel effiong'
    ];

    $sax = [
        'title' => 'HOME WORK',
        'due' => 'today', 
        'assigned_to' => 'samuel effiong',
        'complete' => true
        
    ];


    $me = [
        'title' => 'HOME WORK',
        'due' => 'today',
        'assigned_to' => 'samuel effiong',
        'complete' => true
        
    ];

    //  function 
    // function php1($sam, $hfh, $hhh){
    //     var_dump($sam, $hfh,$hhh);
    // }

    function php($sam, $hfh, $hhh){
        return '$sam, $hfh,$hhh';
    }


    // writting a function that checks if a person is old enough to enter a club
    function checkAge($age){
        if ($age >= 18){
            return 'Welcome';
        }else {
            return 'Sorry, you are too young';
        }
    }

     

   

    require 'index.view.php';
?>