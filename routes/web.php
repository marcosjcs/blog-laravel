<?php

use App\Http\Controllers\HelloWorldController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-world', 'HelloWorldController@index');

Route::get('/post/{slug?}', function($slug = null) {
    return !is_null($slug) ? $slug : 'Comportamento sem a existência do param slug';
})->name('post.single');

Route::get('/user/{id}', function($slug) {
    return $slug;
    })
    ->where(['id' => '[0-9]+']);

Route::resource('/users', 'UserController');