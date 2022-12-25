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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Hello World';
});

Route::get('/page', function () {    
    return 'This is Page';
});

Route::get('/login', function () {    
    return 'login page';
})->name('login');


// Auth Rotes
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return 'This is Dashboard Page';
    });

    Route::get('/user/{id}', function ($id) {

        return 'This is Page Profile';
    })->name('my-profile');

    Route::get('/posts', function(){

        return 'this is post page';

    })->name('admin.post');

});

