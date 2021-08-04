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



Route::get('/chris', function () {
    $nombre = '12';
    $nom = 'chris';
    return view('welcome', compact('nom', 'nombre'));
});

Route::get('/seconde', function () {
    $test = '10';
    $test2 = '10';
    return view('seconde', compact('test', 'test2'));
});

Route::get('/couleur', function () {
    $couleur = 'ff8000';
    $couleurTab = array (
     '#AC4D39','#39AC48','#395FAC','#AC3999'
    );
    return view('couleur', compact('couleur', 'couleurTab'));
});
