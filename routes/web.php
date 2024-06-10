<?php

use App\Http\Controllers\frontend\homeController;
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
Route::get('service',[homeController::class,'service']);
Route::get('blog',[homeController::class,'blog']);
Route::get('contact',[homeController::class,'contact']);
Route::get('portfolio',[homeController::class,'portfolio']);

});
