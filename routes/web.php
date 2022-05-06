<?php

use Illuminate\Support\Facades\Route;
use App\Postcard;

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

Route::get("/postcards", function () {
    $postCardService = new \App\PostcardSendingService('us', 4, 6);
    $postCardService->hello("Hello from Coder", 'test@teste.com.br');
});

Route::get("/facade", function () {
    Postcard::hello('asddasdsa', 'teste@teste.com');
});
