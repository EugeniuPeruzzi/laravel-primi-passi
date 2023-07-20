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
    return view('home');
});

Route::get('/about-us', function () {
    
    $content = 'Siamo la calsse 99# del corso Full Stack Web Developer';
    return view('about-us', compact('content'));
});

Route::get('/more', function () {
    
    $more = 'Siamo all\'introduzione di Laravel, e sembra molto figo';
    return view('more', compact('more'));
});