<?php

/*
|--------------------------------------------------------------------------
| Webルート
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録できます。"web"ルートは
| ミドルウェアのグループの中へ、RouteServiceProviderによりロード
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


Route::get('home', 'HomeController@index')->name('home');

Route::get('/account/edit', 'AccountController@edit')->name('account_edit');
Route::put('/account/update', 'AccountController@update')->name('account_update');

Route::get('/profile/edit', 'ProfileController@edit')->name('profile_edit');
Route::put('/profile/update', 'ProfileController@update')->name('profile_update');

Route::post('/tweet/post', 'TweetController@post')->name('post');
Route::get('/tweet/search', 'TweetController@search')->name('search');

Route::get('/{name}', 'UserController@show')->name('user_show');

Route::get('/{name}/following', 'FollowController@following')->name('following');
Route::get('/{name}/followers', 'FollowController@followers')->name('followers');
