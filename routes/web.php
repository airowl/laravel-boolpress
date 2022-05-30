<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::middleware('auth')
->namespace('admin')
->name('admin.')
->prefix('admin')
->group(function() {
    Route::get('/', 'AdminController@index')->name('home');
    Route::resource('posts', PostsController::class);
});

Route::get('/contact', 'guest\ContactController@contact')->name('guest.contact');
Route::post('/contact', 'guest\ContactController@contactMailSender')->name('guest.send');
Route::get('/thanks', 'guest\ContactController@thanks')->name('guest.thanks');

Route::get('{any?}', function () {
    return view('guests.index');
})->where('any', '.*');

