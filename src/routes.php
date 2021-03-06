<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('base', new Routing\Route('/', [
    '_controller' => 'App\Controller\BaseController::base',
]));
$routes->add('order', new Routing\Route('/order/{page}', [
    'page' => '1',
    '_controller' => 'App\Controller\OrderController::index',
]));
$routes->add('order_create', new Routing\Route('/create/order', [
    '_controller' => 'App\Controller\OrderController::create',
    'method' => 'post'
]));
$routes->add('product', new Routing\Route('/product', [
    '_controller' => 'App\Controller\ProductController::index',
]));
$routes->add('single', new Routing\Route('/single', [
    '_controller' => 'App\Controller\BaseController::singleAction',
]));

return $routes;
