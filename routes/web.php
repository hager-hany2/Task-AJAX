<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControllerResource;
use App\Http\Controllers\questionsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-product', [ProductControllerResource::class, 'store'])->name('products.store');
Route::get('/categories/{category}/questions', [questionsController::class, 'questions'])->name('categories.questions');
