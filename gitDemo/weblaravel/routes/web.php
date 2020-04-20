<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/req/{id?}',function($id=100){
//     return $id;
// })->where(['id' => '\d+']);

// Route::get('/req/{id?}',function(int $id){
//     return $id;
// });

Route::get('/req',function(){
    $id=isset($_GET['id'])?$_GET['id']:0;
    return $id;
})->name('r1');




Route::post('/req',function(){
     return 'post';
});

// Route::match(['get','post','put'],'/test',function(){
//      dump($_SERVER);
// });

Route::any('/test',function(){
    return route('r1');
});


Route::group(['prefix' =>'admin'],function(){
    Route::any('test1',function(){
        return 't1';
    });

    Route::any('test2',function(){
        return 't2';
    });

});


Route::get('login','LoginController@index')->name('login');

Route::group(['namespace'=> 'Admin'],function(){

    Route::get('admin/article/{id}','ArticalController@test') ->name('article');
});
