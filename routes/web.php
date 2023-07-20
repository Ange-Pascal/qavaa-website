<?php

use App\Http\Controllers\CommerceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// }); 

Route::get('/', [WelcomeController::class, 'bienvenue'])->name('welcome');
Route::get('/about', [WelcomeController::class, 'apropos'])->name('about');   


Route::get('/marketplace', [CommerceController::class, 'shop'])->name('marketplace'); 

Route::get('/contacts', [ContactController::class, 'afficher'])->name('contacts');
