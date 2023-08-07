<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Shoppingcart;
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
//for home page
Route::get('/pros', [ItemController::class, 'index']);

//for creating new pro
Route::get('/listings/create', [ItemController::class, 'create'])->middleware('auth');

//for storing it in DB
Route::post('/listings', [ItemController::class, 'store'])->middleware('auth');



//for admin panel page
Route::get('/manage', [ItemController::class, 'resumes']);


//for products page
Route::get('/', [ItemController::class, 'manage']);

//for product edit page
Route::get('/listings/{item}/edit', [ItemController::class, 'edit']);

//for prodcut update page
Route::put('/listings/{item}', [ItemController::class, 'update']);


//for shopping cart page with live wire
// Route::get('/shoppingcart', [Shoppingcart::class, 'render']);

//alternate shopping cart testing
Route::get('/shoppingcart', [CartController::class, 'showcart']);


// Route::get('/carttesting', [CartController::class, 'basket']);


//for stripe payment fateway
Route::post('/payment/{amount}', [CartController::class, 'makeArder']);

//for stripe succes
Route::get('/success', [CartController::class, 'makeOrder'])->name('success');
//for stripe cancel
Route::get('/cancel', [CartController::class, 'notOrder'])->name('cancel');


//for registering new user
Route::get('/user/register', [UserController::class, 'create'])->middleware('guest');

//for creating a new user

Route::post('/users', [UserController::class, 'store']);


//for login
Route::get('/user/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//for authenticating user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';