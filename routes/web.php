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
    $menu = [
        'Characters',
        'Comics',
        'Movies',
        'Tv',
        'Games',
        'Collectibles',
        'Videos',
        'Fans',
        'News',
        'Shop', 
    ];
    return view('home', [
        'menu' => $menu,
    ]);
})->name('home');


Route::get('/header', function () {
    $menu = [
        'Characters',
        'Comics',
        'Movies',
        'Tv',
        'Games',
        'Collectibles',
        'Videos',
        'Fans',
        'News',
        'Shop', 
    ];
    return view('header', [
        'menu' => $menu,
    ]);
})->name('header');

Route::get('/footer', function () {
    return view('footer');
})->name('footer');
