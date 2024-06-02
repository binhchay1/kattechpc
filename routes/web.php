<?php

use App\Http\Controllers\Admin\CategoryFilterController;
use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController as ProductAdmin;
use App\Http\Controllers\Page\BuildPCController;
use App\Http\Controllers\Admin\BuildPCController as BuildPCAdmin;
use App\Http\Controllers\Page\ProductController as ProductPage;
use App\Http\Controllers\Admin\PostController as PostAdmin;
use App\Http\Controllers\Page\PostController as PostPage;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StorageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Page\HomeController;
use App\Http\Controllers\Page\AccountController;
use App\Http\Controllers\Page\CartController;
use App\Http\Controllers\Page\SocialLoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LandingPageController;
use App\Http\Controllers\Admin\LayoutController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Page\ErrorController;
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

Route::get('/401', [ErrorController::class, 'view401'])->name('error.401');
Route::get('/402', [ErrorController::class, 'view402'])->name('error.402');
Route::get('/403', [ErrorController::class, 'view403'])->name('error.403');
Route::get('/404', [ErrorController::class, 'view404'])->name('error.404');
Route::get('/419', [ErrorController::class, 'view419'])->name('error.419');
Route::get('/429', [ErrorController::class, 'view429'])->name('error.429');
Route::get('/500', [ErrorController::class, 'view500'])->name('error.500');
Route::get('/503', [ErrorController::class, 'view503'])->name('error.503');

Route::group(['middleware' => ['cache.menu', 'count.visitor']], function () {
    Route::get('/', [HomeController::class, 'viewHome'])->name('home');
    Route::get('/search', [HomeController::class, 'viewSearch'])->name('search');
    Route::get('/chinh-sach-bao-hanh', [HomeController::class, 'viewPolicy'])->name('policy');
    Route::get('/thanh-toan-truc-tuyen', [HomeController::class, 'paymentOnline'])->name('paymentOnline');
    Route::get('/huong-dan-thanh-toan', [HomeController::class, 'payment'])->name('payment');
    Route::get('/post', [HomeController::class, 'viewPost'])->name('post');
    Route::get('/product/{slug}', [ProductPage::class, 'productDetail'])->name('productDetail');
    Route::post('/comment', [ProductPage::class, 'storeComment'])->name('storeComment');
    Route::post('/rating', [ProductPage::class, 'rating'])->name('rating');
    Route::get('/khuyen-mai', [HomeController::class, 'viewPromotion'])->name('promotion');
    Route::get('/promotion-detail/{slug}', [HomeController::class, 'promotionDetail'])->name('promotion.detail');
    Route::get('/chinh-sach-quy-dinh-chung', [HomeController::class, 'rules'])->name('rules');
    Route::get('/tra-cuu-hoa-don', [HomeController::class, 'electronicBill'])->name('electronicBill');
    Route::get('/bao-mat-thong-tin-khach-hang', [HomeController::class, 'securityCustomer'])->name('securityCustomer');
    Route::get('/gop-y-khieu-nai', [HomeController::class, 'complaint'])->name('complaint');
    Route::get('/chinh-sach-hang-chinh-hang', [HomeController::class, 'productPolicy'])->name('productPolicy');
    Route::get('/chinh-sach-doanh-nghiep', [HomeController::class, 'businessPolicy'])->name('businessPolicy');
    Route::get('/landing/{slug}', [HomeController::class, 'viewLandingPage'])->name('landing.page');
    Route::get('/custom-contact', [HomeController::class, 'storeCustomContact'])->name('custom.contact');
    Route::get('/lich-su-mua-hang', [AccountController::class, 'orderHistory'])->name('orderHistory');
    Route::get('/auth/google/', [SocialLoginController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google/callback/', [SocialLoginController::class, 'handleGoogleCallback']);
    Route::get('/auth/facebook/', [SocialLoginController::class, 'redirectToFacebook'])->name('auth.facebook');
    Route::get('/auth/facebook/callback/', [SocialLoginController::class, 'handleFacebookCallback']);
    Route::get('/collection/{slug}', [HomeController::class, 'showDataCategory'])->name('showDataCategory');
    Route::get('/promotion/{slug}', [HomeController::class, 'showPromotionDetail'])->name('showPromotionDetail');
    Route::get('/gioi-thieu', [HomeController::class, 'introduction'])->name('introduction');
    Route::get('/lien-he-hop-tac-kinh-doanh', [HomeController::class, 'contactBusiness'])->name('contactBusiness');
=======
    Route::get('/get-products-for-suggestions', [ProductPage::class, 'suggestionsProduct'])->name('suggestions.product');

    Route::group(['middleware' => 'user'], function () {
        Route::get('/get-order-detail/{order_id}', [AccountController::class, 'getOrderDetail']);
        Route::get('/thong-tin-tai-khoan', [AccountController::class, 'show'])->name('profile');
        Route::post('/account-info/{id}', [AccountController::class, 'update'])->name('updateProfile');
        Route::get('/change-password', [AccountController::class, 'changePassword'])->name('change-password');
        Route::post('/change-password', [AccountController::class, 'updatePassword'])->name('update-password');
    });

    Route::get('/build-pc',  [BuildPCController::class, 'buildPC'])->name('buildPC');
    Route::get('/get-product',  [BuildPCController::class, 'getProduct'])->name('getProduct');
    Route::get('/add-build-pc/{slug}',  [BuildPCController::class, 'addBuildPC'])->name('addBuildPC');
    Route::get('/add-to-build-pc/{slug}', [BuildPCController::class, 'addBuildPC'])->name('add_to_BuildPC');
    Route::get('/delete-build-pc/{id}',  [BuildPCController::class, 'deleteBuildPC'])->name('deleteBuildPC');
    Route::get('/update-build-pc',  [BuildPCController::class, 'updateBuildPC'])->name('updateBuildPC');
    Route::get('/get-list-menu', [BuildPCController::class, 'getListMenu'])->name('get.list.menu');
    Route::get('/build-pc-checkout',  [BuildPCController::class, 'addToCartBuildPC'])->name('checkout.in.build');

    Route::group(['prefix' => 'cart'], function () {
        Route::get('/add-cart/{slug}',  [CartController::class, 'addCart'])->name('addCart');
        Route::get('/add-to-cart/{slug}', [CartController::class, 'addToCart'])->name('add_to_cart');
        Route::get('/show-cart',  [CartController::class, 'showCart'])->name('showCart');
        Route::get('/delete-cart/{id}',  [CartController::class, 'deleteCart'])->name('deleteCart');
        Route::get('/update-cart',  [CartController::class, 'updateCart'])->name('updateCart');
        Route::post('/checkout',  [CartController::class, 'checkout'])->name('checkout');
        Route::post('/apply-coupon',  [CartController::class, 'addCoupon'])->name('apply.coupon');
        Route::get('/thank-you',  [CartController::class, 'thank'])->name('thank');
    });

    Route::get('/post-detail/{slug}', [PostPage::class, 'postDetail'])->name('post.detail');
    Route::get('/post-category/{slug}', [HomeController::class, 'postCategory'])->name('post.category');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'viewDashBoard'])->name('admin.dashboard');
    Route::get('/custom-contact', [AdminController::class, 'listCustomContact'])->name('admin.custom.contact');

    Route::group(['prefix' => 'layout'], function () {
        Route::get('/', [LayoutController::class, 'viewCustomLayout'])->name('admin.custom.layout');
        Route::post('/store-layout', [LayoutController::class, 'storeLayout'])->name('admin.store.layout');
        Route::post('/store-flash-sale', [LayoutController::class, 'storeFlashSale'])->name('admin.store.flash.sale');
        Route::post('/store-hot-sale', [LayoutController::class, 'storeHotSale'])->name('admin.store.hot.sale');
        Route::post('/store-slide', [LayoutController::class, 'storeSlide'])->name('admin.store.slide');
        Route::get('/delete-slide/{index}', [LayoutController::class, 'deleteSlide'])->name('admin.delete.slide');
    });

    Route::group(['prefix' => 'promotion'], function () {
        Route::get('/', [PromotionController::class, 'index'])->name('admin.promotion.index');
        Route::get('/add', [PromotionController::class, 'createPromotion'])->name('admin.promotion.create');
        Route::post('/store', [PromotionController::class, 'storePromotion'])->name('admin.promotion.store');
        Route::get('/update/{id}', [PromotionController::class, 'editPromotion'])->name('admin.promotion.edit');
        Route::post('/update/{id}', [PromotionController::class, 'updatePromotion'])->name('admin.promotion.update');
        Route::get('/delete/{id}', [PromotionController::class, 'deletePromotion'])->name('admin.promotion.delete');
    });

    Route::group(['prefix' => 'post'], function () {
        Route::get('/list', [PostAdmin::class, 'index'])->name('admin.post.index');
        Route::get('/add', [PostAdmin::class, 'createPost'])->name('admin.post.create');
        Route::post('/store', [PostAdmin::class, 'storePost'])->name('admin.post.store');
        Route::get('/update/{id}', [PostAdmin::class, 'editPost'])->name('admin.post.edit');
        Route::post('/update/{id}', [PostAdmin::class, 'updatePost'])->name('admin.post.update');
        Route::get('/delete/{id}', [PostAdmin::class, 'deletePost'])->name('admin.post.delete');
        Route::post('post/img', [PostAdmin::class, 'uploadMedia'])->name('admin.post.uploadMedia');
    });

    Route::group(['prefix' => 'orders'], function () {
        Route::get('/list', [OrderController::class, 'index'])->name('admin.order.index');
        Route::get('/add', [OrderController::class, 'createOrder'])->name('admin.order.create');
        Route::post('/store', [OrderController::class, 'storeOrder'])->name('admin.order.store');
        Route::get('/update/{id}', [OrderController::class, 'editOrder'])->name('admin.order.edit');
        Route::post('/update/{id}', [OrderController::class, 'updateOrder'])->name('admin.order.update');
        Route::get('/delete/{id}', [OrderController::class, 'deleteOrder'])->name('admin.order.delete');
        Route::get('/export', [OrderController::class, 'export'])->name('admin.order.export');
        Route::get('/active-order/{id}', [OrderController::class, 'activeOrder'])->name('activeOrder');
    });

    Route::group(['prefix' => 'storages'], function () {
        Route::get('/list', [StorageController::class, 'index'])->name('admin.storage.index');
        Route::get('/add', [StorageController::class, 'createStorage'])->name('admin.storage.create');
        Route::post('/store', [StorageController::class, 'storeStorage'])->name('admin.storage.store');
        Route::get('/update/{id}', [StorageController::class, 'editStorage'])->name('admin.storage.edit');
        Route::post('/update/{id}', [StorageController::class, 'updateStorage'])->name('admin.storage.update');
        Route::get('/delete/{id}', [StorageController::class, 'deleteStorage'])->name('admin.storage.delete');
        Route::get('/export-excel', [StorageController::class, 'exportExcel'])->name('admin.storage.export.excel');
        Route::get('/import/{id}', [StorageController::class, 'import'])->name('admin.storage.import');
        Route::get('/storage-product', [StorageController::class, 'listProduct'])->name('admin.storage.listProduct');
        Route::post('/store-import', [StorageController::class, 'storeImportProduct'])->name('admin.storage.store-product');
        Route::get('/export/{id}', [StorageController::class, 'export'])->name('admin.storage.export');
    });

    Route::group(['prefix' => 'coupon'], function () {
        Route::get('/list', [CouponController::class, 'index'])->name('admin.coupon.index');
        Route::get('/add', [CouponController::class, 'create'])->name('admin.coupon.create');
        Route::post('/store', [CouponController::class, 'store'])->name('admin.coupon.store');
        Route::get('/update/{id}', [CouponController::class, 'edit'])->name('admin.coupon.edit');
        Route::post('/update/{id}', [CouponController::class, 'update'])->name('admin.coupon.update');
        Route::get('/delete/{id}', [CouponController::class, 'delete'])->name('admin.coupon.delete');
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('/list', [ProductAdmin::class, 'index'])->name('admin.product.index');
        Route::get('/add', [ProductAdmin::class, 'createProduct'])->name('admin.product.create');
        Route::post('/store', [ProductAdmin::class, 'storeProduct'])->name('admin.product.store');
        Route::get('/update/{id}', [ProductAdmin::class, 'editProduct'])->name('admin.product.edit');
        Route::post('/update/{id}', [ProductAdmin::class, 'updateProduct'])->name('admin.product.update');
        Route::get('/delete/{id}', [ProductAdmin::class, 'deleteProduct'])->name('admin.product.delete');
    });

    Route::group(['prefix' => 'brands'], function () {
        Route::get('/list', [BrandController::class, 'index'])->name('admin.brand.index');
        Route::get('/add', [BrandController::class, 'createBrand'])->name('admin.brand.create');
        Route::post('/store', [BrandController::class, 'storeBrand'])->name('admin.brand.store');
        Route::get('/update/{id}', [BrandController::class, 'editBrand'])->name('admin.brand.edit');
        Route::post('/update/{id}', [BrandController::class, 'updateBrand'])->name('admin.brand.update');
        Route::get('/delete/{id}', [BrandController::class, 'deleteBrand'])->name('admin.brand.delete');
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
        Route::get('/active-category/{id}', [CategoryProductController::class, 'activeCate'])->name('activeCate');
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

    Route::group(['prefix' => 'build-pc'], function () {
        Route::get('/list', [BuildPCAdmin::class, 'index'])->name('admin.buildPC.index');
        Route::get('/add', [BuildPCAdmin::class, 'create'])->name('admin.buildPC.create');
        Route::post('/store', [BuildPCAdmin::class, 'store'])->name('admin.buildPC.store');
        Route::get('/update/{id}', [BuildPCAdmin::class, 'edit'])->name('admin.buildPC.edit');
        Route::post('/update/{id}', [BuildPCAdmin::class, 'update'])->name('admin.buildPC.update');
        Route::get('/delete/{id}', [BuildPCAdmin::class, 'delete'])->name('admin.buildPC.delete');
    });

    Route::group(['prefix' => 'category-filter'], function () {
        Route::get('/list', [CategoryFilterController::class, 'index'])->name('admin.category-filter.index');
        Route::get('/add', [CategoryFilterController::class, 'create'])->name('admin.category-filter.create');
        Route::post('/store', [CategoryFilterController::class, 'store'])->name('admin.category-filter.store');
        Route::get('/update/{id}', [CategoryFilterController::class, 'edit'])->name('admin.category-filter.edit');
        Route::post('/update/{id}', [CategoryFilterController::class, 'update'])->name('admin.category-filter.update');
        Route::get('/delete/{id}', [CategoryFilterController::class, 'delete'])->name('admin.category-filter.delete');
    });

    Route::get('/products/{productId}/upload', [ProductImageController::class, 'index']);
    Route::post('/products/{productId}/upload', [ProductImageController::class, 'store']);
    Route::get('/product-image/{productImageId}/delete', [ProductImageController::class, 'destroy']);

    Route::get('/get-data-for-income', [AdminController::class, 'getDataForIncomeChart']);
    Route::get('/get-data-for-visitor', [AdminController::class, 'getDataForVisitorChart']);
});
