<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = config("db");
    return view('pages.home', compact("comics"));
});

Route::get('/catalog/{id}', function (string $id) {
    @dd($id);
    return view('catalog.show');
})->name("catalog") ;
