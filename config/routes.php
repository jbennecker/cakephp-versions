<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin('Versions', ['path' => '/versions'], function (RouteBuilder $routes) {
    $routes->extensions(['json']);
    $routes->fallbacks(DashedRoute::class);
});
