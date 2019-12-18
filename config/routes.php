<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/projects',
    ['controller' => 'Projects'],
    function($routes){
        $routes->connect('/tagged/*', ['action' => 'tags']);
    }
);

Router::scope('/posts', function($routes){
    $routes->connect('/',
        ['controller' => 'Posts']
    );

    $routes->connect('/create',
        ['controller' => 'Posts', 'action' => 'create']
    );

    $routes->connect('/:id',
        ['controller' => 'Posts', 'action' => 'view'],
        ['id' => '\d+', 'pass' => ['id']]
    );

    $routes->connect('edit/:id',
        ['controller' => 'Posts', 'action' => 'edit'],
        ['id' => '\d+', 'pass' => ['id']]
    );
});




Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Projects', 'action' => 'index']);

    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks(DashedRoute::class);
});

/**
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * Router::scope('/api', function (RouteBuilder $routes) {
 *     // No $routes->applyMiddleware() here.
 *     // Connect API actions here.
 * });
 * ```
 */
