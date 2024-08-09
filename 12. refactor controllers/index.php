<?php

require 'vendor/autoload.php';
require 'core/bootrap.php'; 


require Router :: load('routes.php')
    ->direct(Request::uri(), Request::method());