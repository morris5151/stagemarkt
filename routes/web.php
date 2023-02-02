<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\InternshipsController;
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

Route::get('/', [PagesController::class, 'viewHomePage'])->name('home');

Route::get('/stages', [InternshipsController::class, 'internshipViewList']);


Route::get('/dashboard', [PagesController::class, 'viewDashboardPage'])->name('dashboard');


Route::post('/create', [InternshipsController::class, 'createInternship'])->name('create');

Route::get('/create', [PagesController::class, 'viewCreatePage'])->name('viewCreatePage');
