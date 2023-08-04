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
Route::get('/books', function () {
    $books = [
        ['title' => 'Book 1', 'price' => '20'],
        ['title' => 'Book 2', 'price' => '30'],
        ['title' => 'Book 3', 'price' => '40']
    ];

    return view('books', ['books' => $books]);
});
Route::get('/add', function () {
    return view('addbook');
});

Route::get('/', function () {
    return view('welcome');
});
