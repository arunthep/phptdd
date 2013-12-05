<?php
// web/index.php
require_once 'WineDAOPDO.php';
require_once 'WineController.php';
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\ServiceControllerServiceProvider());

$app['wine_dao_pdo'] = $app->share(function() {
    return new WineDAOPDO();
});


// definitions

$app['wines.controller'] = $app->share(function() use ($app) {
    return new WineController($app);
});

$app->get('/', 'wines.controller:listWine');



$app->get('/Hello', function() {
    return 'Hello2'; 
}); 

$app->run();
