<?php

class Request

{
    public static function uri()


    {   // handling form
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        // return trim($_SERVER['REQUEST_URI'] , '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}