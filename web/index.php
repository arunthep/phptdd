<?php
// web/index.php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// definitions
$app->get('/', function()  { 
    return 'Hello1'; 
}); 

$app->get('/Hello', function() { 
    return 'Hello2'; 
}); 

$app->run();
