<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('order', new Routing\Route('/order', [
    '_controller' => 'App\Controller\OrderController::index',
]));
$routes->add('order_create', new Routing\Route('/order/create', [
    '_controller' => 'App\Controller\OrderController::create',
    'method' => 'post'
]));
$routes->add('product', new Routing\Route('/product', [
    '_controller' => 'App\Controller\ProductController::index',
]));

return $routes;
