<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\SchemaController;
use App\Models\Schema;

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

 // Route::get('/about', [\App\Http\Controllers\AboutController::class, 'schemasposts']);

 Auth::routes();

 Route::resource('/schemas', App\Http\Controllers\SchemaController::class);

 //Route::get('/schemas', [App\Http\Controllers\SchemaController::class, 'show'])->name('show');


// Route::get('/schemas',function () {
//     $schemas = Schema::all();
//     return view('schemas', [
//         'schemas' => $schemas
//     ]);
//});
//
//
//Route::get('schemas/{schema}', function ($slug) {
//    $schema = Schema::find($slug);
//    return view('schema', [
//        'schema' => $schema
//    ]);
// })->where('post','[A-z_/-]+');
