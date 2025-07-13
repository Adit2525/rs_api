<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['prefix' => 'api/rumah-sakit'], function () use ($router) {
    $router->get('/', 'RumahSakitController@index');
    $router->get('{id}', 'RumahSakitController@show');
    $router->post('/', 'RumahSakitController@store');
    $router->put('{id}', 'RumahSakitController@update');
    $router->delete('{id}', 'RumahSakitController@destroy');
});
