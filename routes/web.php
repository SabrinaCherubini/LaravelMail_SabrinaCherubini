<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'home'])->name('Homepage');
Route::get('products',[PublicController::class,'ShowProducts'])->name('Products');
Route::get('products/details', [PublicController::class, 'ShowDetails'])->name('Details');
Route::get('Contacts', [PublicController::class, 'ShowContacts'])->name('Contacts');

// Rotta che permette di mandare mail
Route::post('/send',[PublicController::class, 'SendMail'])->name('Send');