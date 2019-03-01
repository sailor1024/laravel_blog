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


Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/home/test/index',  'Home\TestController@index');

Route::get('/home/test/getUrl', 'home\TestController@getUrl');


//定义admin模块群组
Route::group(['prefix'=>'admin'],function(){

    //定义admin下的index控制器的群组
    /* Route::group(['prefix'=>'index'],function(){
        Route::match(['post','get'],'index','Admin\IndexController@index');

        Route::match(['post','get'],'list','Admin\IndexController@list')->middleware('checkage');

    });*/

    Route::group(['prefix'=>'index','middleware'=>'check.age'],function(){

        Route::match(['post','get'],'index','Admin\IndexController@index');

        Route::match(['post','get'],'list','Admin\IndexController@list');

    });
});



