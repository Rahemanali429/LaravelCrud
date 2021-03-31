<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\MailController;
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

Route::get('/add', function () {
    return view('add');
});

Route::post('add', [CrudController::class, 'store']);
Route::get('/', [CrudController::class, 'index']);
Route::post('delete', [CrudController::class, 'destroy']);
Route::get('edit', [CrudController::class, 'edit']);
Route::post('edit', [CrudController::class, 'update']);


Route::get('/send-email', [MailController::class, 'sendEmail']);
