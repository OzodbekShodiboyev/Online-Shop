<?php

use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Frontend\CartController;
use  App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\WishlistController;

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

Auth::routes();
Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class,'index']);
Route::get('/collections',[FrontendController::class,'categories']);
Route::get('/collections/{category_slug}', [FrontendController::class,'products']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/collections/{category_slug}/{product_slug}',[FrontendController::class,'productView']);

Route::middleware(['auth'])->group(function (){
    Route::get('/wishlist',[WishlistController::class,'index']);
    Route::get('/cart', [CartController::class, 'index']);
});

// Route::livewire('/product/view/{category}/{product}', 'frontend.product.view');

Route::prefix('/admin')->middleware('auth', 'isAdmin')->group(function () {

    //DASHBOARD Route
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // CATEGORY Routes
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/create', [CategoryController::class, 'create']);
    Route::post('category', [CategoryController::class, 'store']);
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);
    Route::put('/category/{category}/', [CategoryController::class, 'update']);
    Route::any('category/{category}/delete', [CategoryController::class, 'delete']);


    //Product Routes
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products/store', [ProductController::class, 'store']);
    Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
    Route::put('/products/{product}/update', [ProductController::class, 'update']);
    Route::get('/products/{product_id}/delete', [ProductController::class, 'destroy']); 

    Route::post('/product-color/{prod_color_id}', [ProductController::class, 'updateProductColorQty']);
    Route::get('/product-color/{prod_color_id}/delete', [ProductController::class, 'deleteProductColor']);

    //Delete image
    Route::get('/product-image/{product_image_id}/delete',  [ProductController::class, 'destroyImage']);



    // Brand Routes
    Route::get('/brands', [BrandController::class, 'index']);
    Route::get('/brands/create', [BrandController::class, 'create']);
    Route::post('/brands', [BrandController::class, 'store']);
    Route::get('/brands/{dat}/edit', [BrandController::class, 'edit']);
    Route::post('/brands/{dat}/update', [BrandController::class, 'update']);
    Route::any('brands/{dat}/delete', [BrandController::class, 'delete']);

    //Slider Routes
    Route::get('/sldr', [SliderController::class, 'index']);
    Route::get('/sliders/create', [SliderController::class, 'create']);
    Route::post('/sldr', [SliderController::class, 'store']);
    Route::get('/sldr/{slider}/edit', [SliderController::class, 'edit']);
    Route::put('/sldr/{slider}', [SliderController::class, 'update']);
    Route::get('sldr/{slider}/delete', [SliderController::class, 'destroy']); 
    
    //Color Routes
    Route::get('/colors', [ColorController::class, 'index']);
    Route::get('/colors/create', [ColorController::class, 'create']);
    Route::post('/colors', [ColorController::class, 'store']);
    Route::get('/colors/{color}/edit', [ColorController::class, 'edit']);
    Route::put('/colors/{color_id}/update', [ColorController::class, 'update']);
    Route::get('/colors/{color_id}/delete', [ColorController::class, 'destroy']); 
});


