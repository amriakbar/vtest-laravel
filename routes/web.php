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

Route::post('/', function () {
    return view('venturo');
});
//Route::post('/process-form', [Venturo::class, 'store'])->name('form.store');
//Route::get('/{id}', [YourController::class, 'show'])->name('form.show');


Route::get('/', function () {
    return view('venturo');
});
