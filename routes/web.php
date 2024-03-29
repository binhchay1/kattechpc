<?php

use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StorageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Page\HomeController;
use App\Http\Controllers\Page\AccountController;
use App\Http\Controllers\Page\CartController;
use App\Http\Controllers\Page\SocialLoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LandingPageController;
use App\Http\Controllers\Admin\LayoutController;
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

Route::get('/', [HomeController::class, 'viewHome'])->name('home');
Route::get('/policy', [HomeController::class, 'viewPolicy'])->name('policy');
Route::get('/blog', [HomeController::class, 'viewPost'])->name('post');
Route::get('/blog-detail/{slug}', [HomeController::class, 'postDetail'])->name('post.detail');
Route::get('/support', [HomeController::class, 'viewSupport'])->name('support');
Route::get('/product/{slug}', [HomeController::class, 'productDetail'])->name('productDetail');
Route::get('/promotion', [HomeController::class, 'viewPromotion'])->name('promotion');
Route::get('/promotion-detail', [HomeController::class, 'promotionDetail'])->name('promotionDetail');
Route::get('/rules', [HomeController::class, 'rules'])->name('rules');
Route::get('/electronic-bill', [HomeController::class, 'electronicBill'])->name('electronicBill');
Route::get('/security-customer', [HomeController::class, 'securityCustomer'])->name('securityCustomer');
Route::get('/complaint', [HomeController::class, 'complaint'])->name('complaint');
Route::get('/product-policy', [HomeController::class, 'productPolicy'])->name('productPolicy');
Route::get('/business-policy', [HomeController::class, 'businessPolicy'])->name('businessPolicy');
Route::get('/landing/{slug}', [HomeController::class, 'viewLandingPage'])->name('landing.page');
Route::get('/custom-contact', [HomeController::class, 'storeCustomContact'])->name('custom.contact');
Route::get('account-info', [AccountController::class, 'show'])->name('profile');
Route::post('account-info/{id}', [AccountController::class, 'update'])->name('updateProfile');
Route::get('/change-password/', [AccountController::class, 'changePassword'])->name('change-password');
Route::post('/change-password/', [AccountController::class, 'updatePassword'])->name('update-password');
Route::get('/order-history', [AccountController::class, 'orderHistory'])->name('orderHistory');
Route::get('/auth/google/', [SocialLoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback/', [SocialLoginController::class, 'handleGoogleCallback']);
Route::get('/auth/facebook/', [SocialLoginController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('/auth/facebook/callback/', [SocialLoginController::class, 'handleFacebookCallback']);

Route::group(['prefix' => 'product'], function () {
    Route::get('/detail', [\App\Http\Controllers\Page\ProductController::class, 'detail'])->name('page.product.detail');
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/add-cart/{slug}',  [CartController::class, 'addCart'])->name('addCart');
    Route::get('show-cart',  [CartController::class, 'showCart'])->name('showCart');
    Route::get('delete-cart/{id}',  [CartController::class, 'deleteCart'])->name('deleteCart');
    Route::get('update-cart',  [CartController::class, 'updateCart'])->name('updateCart');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'viewDashBoard'])->name('admin.dashboard');
    Route::get('/custom-contact', [AdminController::class, 'listCustomContact'])->name('admin.custom.contact');
    Route::get('/layout', [LayoutController::class, 'viewCustomLayout'])->name('admin.custom.layout');
    Route::get('/collection', [CollectionController::class, 'viewCollection'])->name('admin.collection');
    // Route::get('index/{locale}', [TailwickController::class, 'lang']);

    Route::group(['prefix' => 'promotion'], function () {
        Route::get('/', [PromotionController::class, 'index'])->name('admin.promotion.index');
        Route::get('/detail/{id}', [PromotionController::class, 'showPromotion'])->name('admin.promotion.show');
        Route::get('/add', [PromotionController::class, 'createPromotion'])->name('admin.promotion.create');
        Route::post('/store', [PromotionController::class, 'storePromotion'])->name('admin.promotion.store');
        Route::get('/update/{id}', [PromotionController::class, 'editPromotion'])->name('admin.promotion.edit');
        Route::post('/update/{id}', [PromotionController::class, 'updatePromotion'])->name('admin.promotion.update');
        Route::get('/delete/{id}', [PromotionController::class, 'deletePromotion'])->name('admin.promotion.delete');
    });

    Route::group(['prefix' => 'post'], function () {
        Route::get('/list', [PostController::class, 'index'])->name('admin.post.index');
        Route::get('/detail/{id}', [PostController::class, 'showPost'])->name('admin.post.show');
        Route::get('/add', [PostController::class, 'createPost'])->name('admin.post.create');
        Route::post('/store', [PostController::class, 'storePost'])->name('admin.post.store');
        Route::get('/update/{id}', [PostController::class, 'editPost'])->name('admin.post.edit');
        Route::post('/update/{id}', [PostController::class, 'updatePost'])->name('admin.post.update');
        Route::get('/delete/{id}', [PostController::class, 'deletePost'])->name('admin.post.delete');
        Route::post('post/img', [PostController::class, 'uploadMedia'])->name('admin.post.uploadMedia');
    });

    Route::group(['prefix' => 'orders'], function () {
        Route::get('/list', [OrderController::class, 'index'])->name('admin.order.index');
        Route::get('/detail/{id}', [OrderController::class, 'showOrder'])->name('admin.order.show');
        Route::get('/add', [OrderController::class, 'createOrder'])->name('admin.order.create');
        Route::post('/store', [OrderController::class, 'storeOrder'])->name('admin.order.store');
        Route::get('/update/{id}', [OrderController::class, 'editOrder'])->name('admin.order.edit');
        Route::post('/update/{id}', [OrderController::class, 'updateOrder'])->name('admin.order.update');
        Route::get('/delete/{id}', [OrderController::class, 'deleteOrder'])->name('admin.order.delete');
        Route::get('/export', [OrderController::class, 'export'])->name('admin.order.export');
    });

    Route::group(['prefix' => 'storages'], function () {
        Route::get('/list', [StorageController::class, 'index'])->name('admin.storage.index');
        Route::get('/detail/{id}', [StorageController::class, 'showStorage'])->name('admin.storage.show');
        Route::get('/add', [StorageController::class, 'createStorage'])->name('admin.storage.create');
        Route::post('/store', [StorageController::class, 'storeStorage'])->name('admin.storage.store');
        Route::get('/update/{id}', [StorageController::class, 'editStorage'])->name('admin.storage.edit');
        Route::post('/update/{id}', [StorageController::class, 'updateStorage'])->name('admin.storage.update');
        Route::get('/delete/{id}', [StorageController::class, 'deleteStorage'])->name('admin.storage.delete');
        Route::post('/import', [StorageController::class, 'import'])->name('admin.storage.import');
        Route::get('/export', [StorageController::class, 'export'])->name('admin.storage.export');
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('/list', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('/detail/{id}', [ProductController::class, 'show'])->name('admin.product.show');
        Route::get('/add', [ProductController::class, 'createProduct'])->name('admin.product.create');
        Route::post('/store', [ProductController::class, 'storeProduct'])->name('admin.product.store');
        Route::get('/update/{id}', [ProductController::class, 'editProduct'])->name('admin.product.edit');
        Route::post('/update/{id}', [ProductController::class, 'updateProduct'])->name('admin.product.update');
        Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('admin.product.delete');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/list', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/add', [UserController::class, 'createUser'])->name('admin.user.create');
        Route::post('/store', [UserController::class, 'storeUser'])->name('admin.user.store');
        Route::get('/update/{user}', [UserController::class, 'editUser'])->name('admin.user.edit');
        Route::post('/update/{user}', [UserController::class, 'updateUser'])->name('admin.user.update');
        Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('admin.user.delete');
    });

    Route::group(['prefix' => 'roles'], function () {
        Route::get('/list', [RoleController::class, 'index'])->name('admin.role.index');
        Route::get('/add', [RoleController::class, 'createRole'])->name('admin.role.create');
        Route::post('/store', [RoleController::class, 'storeRole'])->name('admin.role.store');
        Route::get('/update/{role}', [RoleController::class, 'editRole'])->name('admin.role.edit');
        Route::post('/update/{role}', [RoleController::class, 'updateRole'])->name('admin.role.update');
        Route::get('/delete/{id}', [RoleController::class, 'deleteRole'])->name('admin.role.delete');
    });

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/update/{id}', [ProfileController::class, 'editProfile'])->name('admin.profile.edit');
        Route::post('/update/{id}', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
    });

    Route::group(['prefix' => 'landing'], function () {
        Route::get('/list', [LandingPageController::class, 'index'])->name('admin.landing.page.index');
        Route::get('/add', [LandingPageController::class, 'createLandingPage'])->name('admin.landing.page.create');
        Route::post('/store', [LandingPageController::class, 'storeLandingPage'])->name('admin.landing.page.store');
        Route::get('/update/{role}', [LandingPageController::class, 'editLandingPage'])->name('admin.landing.page.edit');
        Route::post('/update/{role}', [LandingPageController::class, 'updateLandingPage'])->name('admin.landing.page.update');
        Route::get('/delete/{id}', [LandingPageController::class, 'deleteLandingPage'])->name('admin.landing.page.delete');
    });

    Route::group(['prefix' => 'category-product'], function () {
        Route::get('/list', [CategoryProductController::class, 'index'])->name('admin.categoryProduct.index');
        Route::get('/add', [CategoryProductController::class, 'createCategory'])->name('admin.categoryProduct.create');
        Route::post('/store', [CategoryProductController::class, 'storeCategory'])->name('admin.categoryProduct.store');
        Route::get('/update/{role}', [CategoryProductController::class, 'editCategory'])->name('admin.categoryProduct.edit');
        Route::post('/update/{role}', [CategoryProductController::class, 'updateCategory'])->name('admin.categoryProduct.update');
        Route::get('/delete/{id}', [CategoryProductController::class, 'deleteCategory'])->name('admin.categoryProduct.delete');
    });

    Route::group(['prefix' => 'category-post'], function () {
        Route::get('/list', [CategoryPostController::class, 'index'])->name('admin.categoryPost.index');
        Route::get('/add', [CategoryPostController::class, 'createCategory'])->name('admin.categoryPost.create');
        Route::post('/store', [CategoryPostController::class, 'storeCategory'])->name('admin.categoryPost.store');
        Route::get('/update/{role}', [CategoryPostController::class, 'editCategory'])->name('admin.categoryPost.edit');
        Route::post('/update/{role}', [CategoryPostController::class, 'updateCategory'])->name('admin.categoryPost.update');
        Route::get('/delete/{id}', [CategoryPostController::class, 'deleteCategory'])->name('admin.categoryPost.delete');
    });

    Route::get('products/{productId}/upload', [App\Http\Controllers\Admin\ProductImageController::class, 'index']);
    Route::post('products/{productId}/upload', [App\Http\Controllers\Admin\ProductImageController::class, 'store']);
    Route::get('product-image/{productImageId}/delete', [App\Http\Controllers\Admin\ProductImageController::class, 'destroy']);
});

Route::group(['middleware' => 'user'], function () {
});
