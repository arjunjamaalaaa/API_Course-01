<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController as BC;

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


Route::get('/book', [BC::class, 'index'])->name('book.index');
Route::get('/book/create', [BC::class, 'create'])->name('book.create');
Route::post('/book/store', [BC::class, 'store'])->name('book.store');