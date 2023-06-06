<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Frontend\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use  App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\SettingController;


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
Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'index');
    Route::get('/collections', 'categories');
    Route::get('/collections/{category_slug}', 'products');
    Route::get('/collections/{category_slug}/{product_slug}', 'productView');

    Route::get('/new-arrivals', 'newArrival');
    Route::get('/featured-products', 'featuredProducts');
    Route::get('search', 'searchProducts');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/wishlist', [WishlistController::class, 'index']);
    Route::get('/cart', [CartController::class, 'index']);
    Route::get('/checkout', [CheckoutController::class, 'index']);
    Route::get('orders', [OrderController::class, 'index']);
    Route::get('/orders/{orderId}', [OrderController::class, 'show']);

    Route::get('profile', [ProfileController::class, 'index']);
    Route::post('profile', [ProfileController::class, 'updateUserDetails']);
});

Route::get('thank-you', [FrontendController::class, 'thankyou']);
// Route::livewire('/product/view/{category}/{product}', 'frontend.product.view');

Route::prefix('/admin')->middleware('auth', 'isAdmin')->group(function () {

    //DASHBOARD Route
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('settings', [SettingController::class, 'index']);
    Route::post('settings', [SettingController::class, 'store']);

    //Search Controller
    Route::get('search', [SearchController::class, 'search'])->name('searching');

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
    Route::put('/products/{product}/update', [ProductController::class, 'updat']);
    Route::get('/products/{product_id}/delete', [ProductController::class, 'destroy']);

    Route::post('product-color/{prod_color_id}', [ProductController::class, 'updateProdColorQty']);
    Route::get('product-color/{prod_color_id}/delete', [ProductController::class, 'deleteProdColor']);



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

    //orders routes
    Route::get('/orders', [App\Http\Controllers\Admin\OrderController::class, 'index']);
    Route::get('/orders/{orderId}', [App\Http\Controllers\Admin\OrderController::class, 'show']);
    Route::put('/orders/{orderId}', [App\Http\Controllers\Admin\OrderController::class, 'updateOrderStatus']);
    Route::get('/invoice/{orderId}', [App\Http\Controllers\Admin\OrderController::class, 'viewInvoice']);
    Route::get('/invoice/{orderId}/generate', [App\Http\Controllers\Admin\OrderController::class, 'generateInvoice']);

    //User Controller Routes
    Route::get('users', [UserController::class, 'index']);
    Route::get('users/create', [UserController::class, 'create']);
    Route::post('users', [UserController::class, 'store']);
    Route::get('users/{user_id}/edit', [UserController::class, 'edit']);
    Route::put('users/{user_id}', [UserController::class, 'update']);
    Route::get('users/{user_id}/delete', [UserController::class, 'destroy']);
});
//Localization
Route::get("locale/{lange}",[LocalizationController::class,'setLang']);
