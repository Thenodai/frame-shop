<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('orders', new Routing\Route('/orders'));
$routes->add('product', new Routing\Route('/product', [
    '_controller' => 'App\Controller\ProductController::index',
]));

return $routes;
