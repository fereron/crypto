<?php

use Illuminate\Routing\Router;

/**@var Router $router */

$router->get('/', 'PortfolioController@index')->name('index');

$router->get('/create', 'PortfolioController@create')->name('create');
$router->post('/store', 'PortfolioController@store')->name('store');
