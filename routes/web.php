<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\SchemaController;

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


Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);

Auth::routes();

Route::get('/schemas', [App\Http\Controllers\SchemaController::class, 'index'])->name('schemas');

