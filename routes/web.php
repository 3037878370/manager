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

// 后台登录页面
Route::get('/admin','admin\LoginController@index');
// 后台登录表单提交
Route::post('/admin/login','admin\LoginController@doLogin');
Route::get('/admin/index', 'admin\IndexController@index');
Route::get('welcome', 'admin\IndexController@welcome');


Route::get('style', 'admin\ViewController@style');
Route::get('script', 'admin\ViewController@script');
Route::get('header', 'admin\ViewController@header');
Route::get('lefter', 'admin\ViewController@lefter');