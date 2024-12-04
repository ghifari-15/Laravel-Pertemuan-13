<?php

use App\Http\Controllers\HalController;
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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('about', function () {
//     return view('about');
// })->name('about');

// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');

// Route::get('/new', [PageController::class, 'home'])->name('home');
// Route::get('/new/about', [PageController::class, 'about'])->name('about');
// Route::get('/new/contact', [PageController::class, 'contact'])->name('contact');



Route::get('/new/home', [HalController::class, 'home'])->name('topmenu1_blade');
Route::get('/new/about', [HalController::class, 'about'])->name('topmenu2_blade');
Route::get('new/contact', [HalController::class, 'contact'])->name('topmenu3_blade');