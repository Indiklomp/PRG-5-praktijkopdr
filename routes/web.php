<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\SchemaController;
use App\Models\Schema;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/schemas', App\Http\Controllers\SchemaController::class);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

//Route::group(['middleware' => 'auth'], function(){
//   Route::resource('task',
//   \App\Http\Controllers\TaskController::class);
//});



// Route::get('/schemas',function () {
//     $schemas = Schema::all();
//     return view('schemas', [
//         'schemas' => $schemas
//     ]);
//});



//
//Route::get('schemas/{schema}', function ($slug) {
//    $schema = Schema::find($slug);
//    return view('schema', [
//        'schema' => $schema
//    ]);
// })->where('post','[A-z_/-]+');
