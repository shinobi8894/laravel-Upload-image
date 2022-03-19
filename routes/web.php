<?php

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

Route::get('/', function () {
    return view('welcome');
});


//For adding an image
Route::get('/add-image',[App\Http\Controllers\ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[App\Http\Controllers\ImageUploadController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/view-image',[App\Http\Controllers\ImageUploadController::class,'viewImage'])->name('images.view');