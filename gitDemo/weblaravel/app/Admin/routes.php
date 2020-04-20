<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
     $router->resource('images', MemberController::class);

    // $router->get('/images','MemberController@grid')->name('images.index');
    // $router->get('/images/create','MemberController@create')->name('images.add');
    // $router->post('/images', 'MemberController@save');
    // $router->get('/images/{id}/edit','MemberController@edit');
    // $router->get('/images/{id}','MemberController@detail');
    // $router->put('/images/{id}', 'MemberController@update')->name('images.update');
    // $router->delete('/images/{id}', 'MemberController@delete');

});
