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
Route::get('/test', 'TestController@index');
Route::post('/test', 'TestController@sub');
Route::get('/', function () {
    return view('welcome');
})->name('index');//首页
Route::get('/home', 'HomeController@index')->name('home');//登录后首页home
Route::get('/login', function () {
    return view("login");
});//登录页
Route::post('/login', 'LoginController@login');//登录提交
Route::get('/reg', function () {
    return view("register");
});//注册页
Route::post('/reg', 'LoginController@reg');//注册提交
Route::get('/logout', 'LoginController@logout');//退出
//图片上传
Route::post('/stripe/upimg', 'UploadController@img');
Route::post('/stripe/editerimg', 'UploadController@editerimg');

//交易
Route::middleware(['myauth'])->get('/buy', function () {
    return view("user.buy");
});//买页
Route::post('/buy', 'DealController@buy');//买提交

Route::middleware(['myauth'])->get('/sell', function () {
    return view("register");
});//卖页
Route::post('/sell', 'MemberController@lists');//卖提交

Route::middleware(['myauth'])->get('/sell', function () {
    return view("register");
});//订单列表

