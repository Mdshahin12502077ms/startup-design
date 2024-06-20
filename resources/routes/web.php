<?php

use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ServiceController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[homeController::class,'index']);

Route::prefix('Home/')->group(function(){
Route::get('about',[homeController::class,'about']);
Route::get('soft_dev',[homeController::class,'soft_dev']);
Route::get('blog',[homeController::class,'blog']);
Route::get('contact',[homeController::class,'contact']);
Route::get('portfolio',[homeController::class,'portfolio']);
Route::get('client',[homeController::class,'client']);
Route::get('career',[homeController::class,'career']);




});

Route::prefix('service/')->group(function(){
    Route::get('soft_dev',[ServiceController::class,'soft_dev']);
    Route::get('web_dev',[ServiceController::class,'web_dev']);
    Route::get('app_dev',[ServiceController::class,'app_dev']);

    Route::get('buss_dev',[ServiceController::class,'buss_dev']);
    Route::get('application_dev',[ServiceController::class,'application_dev']);
    Route::get('consult_dev',[ServiceController::class,'consult_dev']);

});

Route::prefix('product/')->group(function(){
Route::get('ERP',[ProductController::class,'ERP']);
Route::get('ecom_web',[ProductController::class,'ecom_web']);

Route::get('statin_manage',[ProductController::class,'statin_manage']);
Route::get('school_manage',[ProductController::class,'school_manage']);

Route::get('inventory_manage',[ProductController::class,'inventory_manage']);
Route::get('lc_manage',[ProductController::class,'lc_manage']);

Route::get('auto_rice_manage',[ProductController::class,'auto_rice_manage']);
Route::get('hr_manage',[ProductController::class,'hr_manage']);

Route::get('hospital_manage',[ProductController::class,'hospital_manage']);
Route::get('booking_manage',[ProductController::class,'booking_manage']);

Route::get('other',[ProductController::class,'other']);


});



