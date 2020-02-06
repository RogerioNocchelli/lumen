<?php

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => '/api'], function () use ($router) {
    $router->post('/series', 'SeriesController@createSeries');
    $router->get('/teste', 'SeriesController@index');
});

