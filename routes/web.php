<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'dashboard'])->name('/');
Route::get('/mirobidtex_news', [PageController::class, 'mirobidtex_news'])->name('mirobidtex_news');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/staffes_table', [PageController::class, 'staffes_table'])->name('staffes_table');
Route::get('/sertificate', [PageController::class, 'sertificate'])->name('sertificate');
Route::get('/subject_materials_table', [PageController::class, 'subject_materials_table'])->name('subject_materials_table');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/benefit_table', [PageController::class, 'benefit_table'])->name('benefit_table');
Route::get('/avtomobillar', [PageController::class, 'avtomobillar'])->name('avtomobillar');
// Create forms
Route::get('/add_news', [PageController::class, 'add_news'])->name('add_news');
Route::get('/add_product', [PageController::class, 'add_product'])->name('add_product');
Route::get('/create_staff', [PageController::class, 'create_staff'])->name('create_staff');
Route::get('/add_sertificate', [PageController::class, 'add_sertificate'])->name('add_sertificate');
Route::get('/create_subject_materials', [PageController::class, 'create_subject_materials'])->name('create_subject_materials');
Route::get('/add_gallery', [PageController::class, 'add_gallery'])->name('add_gallery');
Route::get('/add_avtomobile', [PageController::class, 'add_avtomobile'])->name('add_avtomobile');
