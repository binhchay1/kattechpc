<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StorageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Page\AccountController;
use App\Http\Controllers\Page\CartController;
use App\Http\Controllers\TailwickController;
use App\Http\Controllers\Admin\UserController;
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
//
Route::group(['prefix' => 'admin'], function() {
    Route::get('/dashboard', [AdminController::class, 'viewDashBoard'])->name('admin.dashboard');

//post
    Route::group(['prefix' => 'post  '], function () {
        Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
        Route::get('/detail/{id}', [PostController::class, 'showPost'])->name('admin.post.show');
        Route::get('/add', [PostController::class, 'createPost'])->name('admin.post.create');
        Route::post('/store', [PostController::class, 'storePost'])->name('admin.post.store');
        Route::get('/update/{id}', [PostController::class, 'editPost'])->name('admin.post.edit');
        Route::post('/update/{id}', [PostController::class, 'updatePost'])->name('admin.post.update');
        Route::get('/delete/{id}', [PostController::class, 'deletePost'])->name('admin.post.delete');
    });

//order
    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', [OrderController::class, 'index'])->name('admin.order.index');
        Route::get('/detail/{id}', [OrderController::class, 'showOrder'])->name('admin.order.show');
        Route::get('/add', [OrderController::class, 'createOrder'])->name('admin.order.create');
        Route::post('/store', [OrderController::class, 'storeOrder'])->name('admin.order.store');
        Route::get('/update/{id}', [OrderController::class, 'editOrder'])->name('admin.order.edit');
        Route::post('/update/{id}', [OrderController::class, 'updateOrder'])->name('admin.order.update');
        Route::get('/delete/{id}', [OrderController::class, 'deleteOrder'])->name('admin.order.delete');
        Route::get('/export',[OrderController::class,'export'])->name('admin.order.export');
    });

//storage
    Route::group(['prefix' => 'storages'], function () {
        Route::get('/', [StorageController::class, 'index'])->name('admin.storage.index');
        Route::get('/detail/{id}', [StorageController::class, 'showStorage'])->name('admin.storage.show');
        Route::get('/add', [StorageController::class, 'createStorage'])->name('admin.storage.create');
        Route::post('/store', [StorageController::class, 'storeStorage'])->name('admin.storage.store');
        Route::get('/update/{id}', [StorageController::class, 'editStorage'])->name('admin.storage.edit');
        Route::post('/update/{id}', [StorageController::class, 'updateStorage'])->name('admin.storage.update');
        Route::get('/delete/{id}', [StorageController::class, 'deleteStorage'])->name('admin.storage.delete');
        Route::post('/import',[StorageController::class,'import'])->name('admin.storage.import');
        Route::get('/export',[StorageController::class,'export'])->name('admin.storage.export');
    });

//product
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('/detail/{id}', [ProductController::class, 'show'])->name('admin.product.show');
        Route::get('/add', [ProductController::class, 'createProduct'])->name('admin.product.create');
        Route::post('/store', [ProductController::class, 'storeProduct'])->name('admin.product.store');
        Route::get('/update/{id}', [ProductController::class, 'editProduct'])->name('admin.product.edit');
        Route::post('/update/{id}', [ProductController::class, 'updateProduct'])->name('admin.product.update');
        Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('admin.product.delete');
    });

//user
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/add', [UserController::class, 'createUser'])->name('admin.user.create');
        Route::post('/store', [UserController::class, 'storeUser'])->name('admin.user.store');
        Route::get('/update/{user}', [UserController::class, 'editUser'])->name('admin.user.edit');
        Route::post('/update/{user}', [UserController::class, 'updateUser'])->name('admin.user.update');
        Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('admin.user.delete');
    });

//role
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', [RoleController::class, 'index'])->name('admin.role.index');
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
});
//Admin


Route::get('index/{locale}', [TailwickController::class, 'lang']);
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::group(['middleware' => ['permission.admin']], function () {
        });
    });
});


//Page

Route::get('/', [HomeController::class, 'viewHome'])->name('home');
Route::get('/policy', [HomeController::class, 'viewPolicy'])->name('policy');
Route::get('/blog', [HomeController::class, 'viewPost'])->name('post');
Route::get('/blog-detail', [HomeController::class, 'postDetail'])->name('post.detail');
Route::get('/support', [HomeController::class, 'viewSupport'])->name('support');
Route::get('/promotion', [HomeController::class, 'viewRegister'])->name('promotion');
Route::get('/account', [HomeController::class, 'viewAccount'])->name('account');
Route::get('/account', [HomeController::class, 'viewAccount'])->name('account');
Route::get('/product/{slug}', [HomeController::class, 'productDetail'])->name('productDetail');


Route::get('account-info', [AccountController::class, 'profile'])->name('profile');


//cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('/add-cart/{slug}',  [CartController::class, 'addCart'])->name('addCart');
    Route::get('show-cart',  [CartController::class, 'showCart'])->name('showCart');
    Route::get('delete-cart/{id}',  [CartController::class, 'deleteCart'])->name('deleteCart');
    Route::get('update-cart',  [CartController::class, 'updateCart'])->name('updateCart');
});
// Route::get('/register', [HomeController::class, 'viewRegister'])->name('register');
// Route::get('/login', [HomeController::class, 'viewRegister'])->name('register');
