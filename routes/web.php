<?php

use App\Http\Controllers\ProductController;
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

//Rotta per creazione prodotto ( databese )
Route::get('/product/create', [ProductController::class, 'Create_prod'])->name('Create_products');

//Rotta per prendere dati dal form prodotti
Route::post('/product/store',[ProductController::class, 'store'])->name('product_store');

//Rotta per visualizzare tutti i prodotti salvati nel database
Route::get('/product saved',[ProductController::class,'viewProducts'])->name('ViewsProducts');