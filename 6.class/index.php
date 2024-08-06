<?php
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
//
class Task{
    public $description;


    public $completed = false;

    public function __construct($description)
    {
        
        $this->description = $description;

    }

    // incomplete state
    public function isComplete()
    {
        return $this->completed;
    }

    // complete tstae
    public function complete()
    {
        $this-> completed= true;
    }
};


// $task = new Task('go to the store');

// $task->complete();

// var_dump($task->isComplete());

// now using and array

$tasks = [
    new Task('Go to the store'),
    new Task('finish my scrren'),
    new Task('clean my room')
];

$tasks[2]->complete();

require 'index.view.php';