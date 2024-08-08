<?php

require 'core/bootrap.php'; 

// die(var_dump($app));
// let us chain rule 
// $router = new Router;

// require 'routes.php';


// super global variable for uri
// var_dump($_SERVER); // GET, POST

// $uri = trim($_SERVER['REQUEST_URI'] , '/');

// require $router-> direct($uri);...

// starting here



// require Router :: load('routes.php')
//     ->direct($uri);


require Router :: load('routes.php')
    ->direct(Request::uri(), Request::method());