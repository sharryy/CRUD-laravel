<?php

use App\Http\Controllers\ContactsController;
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

Route::get('/home', [ContactsController::class, 'index']);
Route::post('add/contact', [ContactsController::class, 'create']);

Route::get('add/contact', function () {
    return view('add');
});
Route::get('edit/contact/{id}', [ContactsController::class, 'update']);
Route::get('delete/contact/{id}', [ContactsController::class, 'delete']);
Route::post('edit/contact/', [ContactsController::class, 'updateContact']);
