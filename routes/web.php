<?php


use App\Http\Controllers\AdminController;
use App\Models\Brand;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


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

//front page
Route::get('/about', [FrontController::class, 'About'])->name('About');
Route::get('/contact', [FrontController::class, 'Contact'])->name('Contact');
Route::get('/brands',[FrontController::class,'Brands']);
Route::get('/brandandproduct/{brandid}',[FrontController::class,'BrandAndProduct']);
Route::post('/send',[FrontController::class,'EmailSubmission'])->name('email.send');
Route::get('/search',[FrontController::class,'Search'])->name('search');
Route::get('/all/products',[FrontController::class,'GetAllProductPaginate']);

//admin

Route::get('/dashboard',[AdminController::class,'index']);
Route::get('/adminbrand',[AdminController::class,'adminbrand']);
Route::post('/adminbrand/create',[AdminController::class,'adminCreateBrand']);
Route::post('/adminbrand/update/{id}',[AdminController::class,'adminupdateBrand']);
Route::get('/adminbrand/delete/{id}', [AdminController::class,'deleteBrand']);
Route::get('/adminbrand/viewproduct',[AdminController::class,'ViewProduct']);
Route::post('adminbrand/product/create',[AdminController::class,'CreateProduct']);
Route::get('/product/delete/{id}', [AdminController::class,'deleteProduct']);
Route::post('/update/product/{id}',[AdminController::class,'UpdateProduct']);


require __DIR__.'/auth.php';
