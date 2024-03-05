<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

//Admin
Route::get('/dashboard', [AdminController::class, 'viewDashBoard'])->name('admin.dashboard');
Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/detail/{id}', [ProductController::class, 'show'])->name('admin.product.show');
    Route::get('/create', [ProductController::class, 'createProduct'])->name('admin.product.create');
    Route::post('/store', [ProductController::class, 'storeProduct'])->name('admin.product.store');
    Route::get('/edit/{id}', [ProductController::class, 'editProduct'])->name('admin.product.edit');
    Route::post('/update/{id}', [ProductController::class, 'updateProduct'])->name('admin.product.update');
    Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('admin.product.delete');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('/add', [UserController::class, 'createUser'])->name('admin.user.create');
    Route::post('/store', [UserController::class, 'storeUser'])->name('admin.user.store');
    Route::get('/update/{user}', [UserController::class, 'editUser'])->name('admin.user.edit');
    Route::post('/update/{user}', [UserController::class, 'updateUser'])->name('admin.user.update');
    Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('admin.user.delete');
});

Route::get('index/{locale}', [TailwickController::class, 'lang']);
Route::get('/', [HomeController::class, 'viewHome'])->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::group(['middleware' => ['permission.admin']], function () {

            Route::get('/export', [AdminController::class, 'export'])->name('admin.export');
            Route::get('/getanalystorder', [AdminController::class, 'getAnalystOrder']);
            Route::get('/getdataanalysis', [AdminController::class, 'getDataAnalysis']);




            Route::group(['prefix' => 'promotion'], function () {
                Route::get('/', [AdminController::class, 'promotionView'])->name('admin.promotion.index');
                Route::post('/add', [AdminController::class, 'addPromotion'])->name('admin.create.promotion');
                Route::get('/delete', [AdminController::class, 'deletePromotion'])->name('admin.delete.promotion');
            });
        });

        Route::group(['middleware' => ['permission.admin.doctor']], function () {
            Route::get('/get-info-schedule', [AdminController::class, 'getInforSchedule']);
            Route::get('/send-email-schedule', [MailController::class, 'scheduleMail'])->name('mail.schedule');
            Route::get('/print-preview', [AdminController::class, 'printPreview']);
            Route::get('/store-invoice-doctor', [AdminController::class, 'storeInvoiceDoctor']);
            Route::group(['prefix' => 'schedule'], function () {
                Route::get('/', [ScheduleController::class, 'index'])->name('admin.schedule.index');
                Route::get('/edit/status', [ScheduleController::class, 'editStatus'])->name('admin.status.schedule');
                Route::post('/cancel-schedule', [ScheduleController::class, 'cancelSchedule'])->name('admin.cancel.schedule');
                Route::get('/cancel-schedule-change', [ScheduleController::class, 'cancelScheduleChange'])->name('admin.cancel.schedule.change');
            });
        });

        Route::group(['middleware' => ['permission.admin.employee']], function () {
            Route::group(['prefix' => 'storage'], function () {
                Route::get('/', [StorageController::class, 'index'])->name('admin.storage.index');
                Route::get('/add', [StorageController::class, 'createStorage'])->name('admin.create.storage');
                Route::post('/store', [StorageController::class, 'storeStorage'])->name('admin.store.storage');
                Route::get('/store-history', [StorageController::class, 'historyStorage'])->name('admin.history.storage');
                Route::get('/export-storage', [StorageController::class, 'viewExportStorage'])->name('admin.export.storage');
                Route::post('/exported', [StorageController::class, 'exportStorage'])->name('admin.exported.storage');
                Route::group(['middleware' => ['permission.admin']], function () {
                    Route::get('/edit/status', [StorageController::class, 'editStatus'])->name('admin.status.storage');
                });
            });

            Route::group(['prefix' => 'order'], function () {
                Route::get('/', [AdminController::class, 'orderView'])->name('admin.order.index');
                Route::get('/edit/status', [AdminController::class, 'editStatusOrder'])->name('admin.status.order');
            });
            Route::get('/get-detail-order', [AdminController::class, 'getDetailOrder']);
        });

        Route::group(['prefix' => 'doctor', 'middleware' => ['permission.doctor']], function () {
            Route::get('/', [AdminController::class, 'doctorView'])->name('admin.doctor.index');
        });
    });
});
