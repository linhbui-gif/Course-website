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

Route::prefix('')->group(function() {
    Route::get('/', 'HomeController@index')->name('trang-chu');
    Route::get('/search-school', 'HomeController@search_school')->name('search_school');
    Route::post('/add-contacts', 'HomeController@create_contacts')->name('create_contacts');


    Route::post('/post-login', 'Auth\LoginController@login')->name('front.login');
    Route::post('/post-register', 'Auth\LoginController@register')->name('front.register');
    Route::post('/post-logout', 'Auth\LoginController@logout')->name('front.logout');
    Route::post('/auth/reset-password', 'Auth\ResetPasswordController@sendmail')->name('front.sendmail');

//    Route::get('/chi-tiet-tin-tuc/{slug}', 'HomeController@details_news')->name('details_news');
    Route::get('/khoa-hoc/khoa-hoc-php-co-ban', 'HomeController@phpcourse')->name('phpcourse');
    Route::get('/khoa-hoc/javascript-nen-tang-lap-trinh', 'HomeController@jscourse')->name('jscourse');
    Route::get('/khoa-hoc/khoi-dau-voi-laravel', 'HomeController@laravelcourse')->name('laravelcourse');
    Route::get('/khoa-hoc/nodejs-complete-api', 'HomeController@nodejscourse')->name('nodejscourse');
    Route::get('/khoa-hoc/master-reactjs', 'HomeController@reactcourse')->name('reactcourse');
    Route::get('/khoa-hoc/khoa-hoc-php-nang-cao', 'HomeController@phpAdcourse')->name('phpAdcourse');

});
