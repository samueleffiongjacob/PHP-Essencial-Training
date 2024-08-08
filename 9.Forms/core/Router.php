<?php

class Router 

{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    // router loader 
    public static function load($file)

    {
        $router = new static;

        require $file;

        return $router;
    }


    // public function define($routes)  

    // {
    //     $this -> routes = $routes;
    // }


    // GET ROUTES
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }


    // POST ROUTES
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }


    // directing to the default routes

    public function direct($uri, $requestType) 
    
    {
        // identify url from routes
        if (array_key_exists($uri, $this->routes[ $requestType])) 
        {
            return $this -> routes[ $requestType][$uri]; 
        }
        
        throw new Exception('No routes define for URI');
    }
}
