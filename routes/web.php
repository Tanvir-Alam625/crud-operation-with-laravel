<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, "home"]);
Route::get('/contact', [FrontendController::class, "contact"]);
Route::post('/insert', [FrontendController::class, "storeMessage"]);
Route::get('/messages', [FrontendController::class, "messages"]);
Route::get('/edit/{id}', [FrontendController::class, "update"]);
Route::post('/update', [FrontendController::class, "updateData"]);
Route::get('/delete/{id}', [FrontendController::class, "deleteMessage"]);
