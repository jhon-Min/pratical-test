<?php

use App\Http\Controllers\ContactFormController;

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

Route::post('send', [ContactFormController::class, 'send'])->name('contact.send');
Route::get('/', [ContactFormController::class, 'contactForm'])->name('contact.form');
