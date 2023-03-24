<?php

use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Route::group([
    'as' => 'students.',
    'prefix' => 'student/',
    'controller' => StudentController::class,
], function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');
    Route::get('/{student}/edit', 'edit')->name('edit');
    Route::put('/{student}', 'update')->name('update');
    Route::delete('/{student}/destroy', 'destroy')->name('destroy');
});
