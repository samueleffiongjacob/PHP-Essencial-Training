<?php

class Router 

{

    protected $routes = [];

    // router loader 
    public static function load($file)

    {
        $router = new static;

        require $file;

        return $router;
    }


    public function define($routes)  

    {
        $this -> routes = $routes;
    }

    // directing to the default routes

    public function direct($uri) 
    
    {
        // identify url from routes
        if (array_key_exists($uri, $this->routes)) 
        {
            return $this -> routes[$uri]; 
        }
        
        throw new Exception('No routes define for URI');
    }
}
