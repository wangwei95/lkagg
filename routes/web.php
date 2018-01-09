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
Route::get('/test', 'TestController@index' );
Route::post('/test', 'TestController@sub' );
//首页
Route::get('/', function () {
    return view('welcome');
})->name('index');
//登录后首页home
Route::get('/home', 'HomeController@index')->name('home');
//登录页
Route::get('/login', function () {
    return view("login");
});
//登录提交
Route::post('/login', 'LoginController@login');
//注册页
Route::get('/reg', function () {
    return view("register");
});
//注册提交
Route::post('/reg', 'LoginController@reg');
//退出
Route::get('/logout', 'LoginController@logout');


//图片上传
Route::post('/stripe/upimg', 'UploadController@img');
Route::post('/stripe/editerimg', 'UploadController@editerimg');


//用户管理
Route::get('/member/lists', 'MemberController@lists');
Route::resource('member', 'MemberController');
