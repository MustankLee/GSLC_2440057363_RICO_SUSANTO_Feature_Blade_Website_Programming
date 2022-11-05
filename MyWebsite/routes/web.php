<?php

use App\Http\Controllers\ProductController;
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

Route::get('/manage', [ProductController::class, 'index'])->name('display_manage_view');
Route::get('/add', [ProductController::class, 'display_insert_form'])->name('display_insert_form_view');
Route::post('/add', [ProductController::class, 'insert_logic'])->name('add_insert_logic');
Route::delete('/delete/{product_id}', [ProductController::class, 'delete_logic'])->name('add_delete_logic');
