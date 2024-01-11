<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'flags'])->middleware(['auth'])->name('/');
Route::get('/dashboard/{pais}', [MainController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', [MainController::class, 'flags'])->middleware(['auth']);
Route::get('/create-informe', [MainController::class, 'createInformes'])->middleware(['auth', 'checkUserId'])->name('create-informe');
require __DIR__ . '/auth.php';
