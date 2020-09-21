<?php 
// config/routes.php
use App\Controller\HomeController;
use App\Controller\UserController;
use App\Controller\ApiController;
use App\Controller\SearchController;

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('home', '/')
        // the controller value has the format [controller_class, method_name]
        ->controller([HomeController::class, 'indexAction']);
    $routes->add('register', '/register')
        // the controller value has the format [controller_class, method_name]
        ->controller([UserController::class, 'indexAction']); 
    $routes->add('registerApi', '/register/api')
        // the controller value has the format [controller_class, method_name]
        ->controller([ApiController::class, 'indexAction'])
        ->methods(['POST']); 
    $routes->add('searchApi', '/search')
        // the controller value has the format [controller_class, method_name]
        ->controller([SearchController::class, 'indexAction'])
        ->methods(['POST']); 
};

?>

