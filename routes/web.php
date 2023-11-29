<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LatestNewController;
use App\Http\Controllers\MirobidProductController;
use App\Http\Controllers\MirobidStaffController;
use App\Http\Controllers\SertificateController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SlayderContentController;
use App\Http\Controllers\AuthController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get('/', [PageController::class, 'main_page'])->name('/');
    Route::get('/translation', [PageController::class, 'translation'])->name('translation');
    Route::get('/yangiliklar', [PageController::class, 'yangiliklar'])->name('yangiliklar');
    Route::get('/biz_haqimizda', [PageController::class,'biz_haqimizda'])->name('biz_haqimizda');
    Route::get('/aloqa', [PageController::class, 'aloqa'])->name('aloqa');
    Route::get('/mahsulotlar', [PageController::class, 'mahsulotlar'])->name('mahsulotlar');
    Route::get('/guvohnoma', [PageController::class, 'guvohnoma'])->name('guvohnoma');
    Route::get('/yetkazib_berish', [PageController::class, 'yetkazib_berish'])->name('yetkazib_berish');
// Auth controller
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//    products
    Route::get('/toqilmagan_mato', [PageController::class, 'toqilmagan_mato'])->name('toqilmagan_mato');
    Route::get('/vafli_mato', [PageController::class, 'vafli_mato'])->name('vafli_mato');
    Route::get('/teri_sochiqlar', [PageController::class, 'teri_sochiqlar'])->name('teri_sochiqlar');
    Route::get('/vata_prima', [PageController::class, 'vata_prima'])->name('vata_prima');
    Route::get('/supurgilar', [PageController::class, 'supurgilar'])->name('supurgilar');
    Route::get('/doka', [PageController::class, 'doka'])->name('doka');
    Route::get('/venik', [PageController::class, 'venik'])->name('venik');

});
// Backend route
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/dashboards', [PageController::class, 'dashboards'])->name('dashboards');
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
Route::get('/add_slayder', [PageController::class, 'add_slayder'])->name('add_slayder');
// Resource tables
Route::resource('mirobidtext_news', LatestNewController::class);
Route::resource('mirobid_product', MirobidProductController::class);
Route::resource('mirobid_staff', MirobidStaffController::class);
Route::resource('sertificate', SertificateController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('slayder_content', SlayderContentController::class);
//Frontend route

