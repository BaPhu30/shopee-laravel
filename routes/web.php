<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\RolesMiddleware;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AllCategoryController;
use App\Http\Controllers\CategoryDadController;
use App\Http\Controllers\CategoryChildController;
use App\Http\Controllers\ProductController;

// Admin
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminUserTableController;
use App\Http\Controllers\AdminRolesTableController;
use App\Http\Controllers\AdminUserRoleTableController;
use App\Http\Controllers\AdminShopTableController;
use App\Http\Controllers\AdminCategoryDadTableController;
use App\Http\Controllers\AdminCategoryChildTableController;
use App\Http\Controllers\AdminProductTableController;
// End Admin

// Shop
use App\Http\Controllers\ShopProductTableController;
// End Shop

// Buyer
use App\Http\Controllers\BuyerLoginController;
use App\Http\Controllers\BuyerRegisterController;
use App\Http\Controllers\BuyerResetController;
// End Buyer

// User
use App\Http\Controllers\UserAccountAddressController;
use App\Http\Controllers\UserAccountPasswordController;
use App\Http\Controllers\UserAccountPaymentController;
use App\Http\Controllers\UserAccountProfileController;

use App\Http\Controllers\UserNotificationsActivityController;
use App\Http\Controllers\UserNotificationsOrderController;
use App\Http\Controllers\UserNotificationsPromotionController;
use App\Http\Controllers\UserNotificationsRatingController;
use App\Http\Controllers\UserNotificationsShopeeController;
use App\Http\Controllers\UserNotificationsWalletController;

use App\Http\Controllers\UserCoinController;
use App\Http\Controllers\UserPurchaseController;
use App\Http\Controllers\UserVoucherWalletController;
// End User

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

route::get('/', [IndexController::class, 'index'])->name('index');
route::get('/all-category', [AllCategoryController::class, 'index'])->name('all-category');
route::get('/category-dad/{id}', [CategoryDadController::class, 'index'])->name('category-dad');
route::get('/category-child/{id}', [CategoryChildController::class, 'index'])->name('category-child');
route::get('/product/{id}', [ProductController::class, 'index'])->name('product');

// Admin
// Login Admin
route::get('admin/login', function () {
    return view('admin.login');
})->name('admin');
route::post('/admin/login/check', [AdminLoginController::class, 'store'])->name('admin.login');

route::middleware('auth.admin')->group(function () {
    route::group(['prefix' => '/admin', 'as' => 'admin.'], function () {
        // user table
        route::get('/user-table', [AdminUserTableController::class, 'index'])->name('user-table');
        route::get('/insert-user-table', function () {
            return view('admin.user-table-insert');
        })->name('insert-user-table');
        route::post('/update-user-table/{id}', [AdminUserTableController::class, 'update']);
        route::delete('/delete-user-table/{id}', [AdminUserTableController::class, 'destroy']);

        // user-roles table
        route::get('/user-role-table', [AdminUserRoleTableController::class, 'index'])->name('user-role-table');
        route::get('/insert-user-role-table', [AdminUserRoleTableController::class, 'create'])->name('insert-user-role-table');
        route::delete('/delete-user-roles-table/{id}', [AdminUserRoleTableController::class, 'destroy']);

        // roles table
        route::get('/roles-table', [AdminRolesTableController::class, 'index'])->name('roles-table');
        route::get('/insert-roles-table', function () {
            return view('admin.roles-table-insert');
        })->name('insert-roles-table');
        route::post('/update-roles-table/{id}', [AdminRolesTableController::class, 'update']);
        route::delete('/delete-roles-table/{id}', [AdminRolesTableController::class, 'destroy']);

        // shop table
        route::get('/shop-table', [AdminShopTableController::class, 'index'])->name('shop-table');
        route::get('/insert-shop-table', [AdminShopTableController::class, 'create'])->name('insert-shop-table');
        route::post('/update-shop-table/{id}', [AdminShopTableController::class, 'update']);
        route::delete('/delete-shop-table/{id}', [AdminShopTableController::class, 'destroy']);

        // category-dad table
        route::get('/category-dad-table', [AdminCategoryDadTableController::class, 'index'])->name('category-dad-table');
        route::get('/insert-category-dad-table', function () {
            return view('admin.category-dad-table-insert');
        })->name('insert-category-dad-table');
        route::post('/update-category-dad-table/{id}', [AdminCategoryDadTableController::class, 'update']);
        route::delete('/delete-category-dad-table/{id}', [AdminCategoryDadTableController::class, 'destroy']);

        // category-child table
        route::get('/category-child-table', [AdminCategoryChildTableController::class, 'index'])->name('category-child-table');
        route::get('/insert-category-child-table', [AdminCategoryChildTableController::class, 'create'])->name('insert-category-child-table');
        route::post('/update-category-child-table/{id}', [AdminCategoryChildTableController::class, 'update']);
        route::delete('/delete-category-child-table/{id}', [AdminCategoryChildTableController::class, 'destroy']);

        // product table
        route::get('/product-table', [AdminProductTableController::class, 'index'])->name('product-table');
        route::get('/insert-product-table', [AdminProductTableController::class, 'create'])->name('insert-product-table');
        route::post('/update-product-table/{id}', [AdminProductTableController::class, 'update']);
        route::delete('/delete-product-table/{id}', [AdminProductTableController::class, 'destroy']);

        // store tables
        route::group(['prefix' => '', 'as' => 'store.'], function () {
            // user table
            route::post('/insert-user-table', [AdminUserTableController::class, 'store'])->name('user-table');
            // roles table
            route::post('/insert-roles-table', [AdminRolesTableController::class, 'store'])->name('roles-table');
            // user-role table
            route::post('/insert-user-role-table', [AdminUserRoleTableController::class, 'store'])->name('user-role-table');
            // shop table
            route::post('/insert-shop-table', [AdminShopTableController::class, 'store'])->name('shop-table');
            // category-dad table
            route::post('/insert-category-dad-table', [AdminCategoryDadTableController::class, 'store'])->name('category-dad-table');
            // category-child table
            route::post('/insert-category-child-table', [AdminCategoryChildTableController::class, 'store'])->name('category-child-table');
            // product table
            route::post('/insert-product-table', [AdminProductTableController::class, 'store'])->name('product-table');
        });
    });
});
// End Admin

// Shop
// Login Shop
route::get('/shop/login', [ShopProductTableController::class, 'login'])->name('shop');
route::post('/shop/login/check', [ShopProductTableController::class, 'createLogin'])->name('shop.login');

// product table
route::middleware('auth.shop')->group(function () {
    route::group(['prefix' => '/shop', 'as' => 'shop.'], function () {
        route::get('/product-table', [ShopProductTableController::class, 'index'])->name('product-table');
        route::get('/insert-product-table', [ShopProductTableController::class, 'create'])->name('insert-product-table');
        route::post('/update-product-table/{id}', [ShopProductTableController::class, 'update']);
        route::delete('/delete-product-table/{id}', [ShopProductTableController::class, 'destroy']);
        route::post('/insert-product-table', [AdminProductTableController::class, 'store'])->name('store.product-table');
    });
});
// End Shop

// Buyer
route::group(['prefix' => '/buyer', 'as' => 'buyer.'], function () {
    route::get('/login', [BuyerLoginController::class, 'index'])->name('login');
    route::post('/login/check', [BuyerLoginController::class, 'checkLogin'])->name('check-login');
    route::get('/register', [BuyerRegisterController::class, 'index'])->name('register');
    route::post('/register/store', [BuyerRegisterController::class, 'store'])->name('register.store');
    route::get('/reset', [BuyerResetController::class, 'index'])->name('reset');
});
// End Buyer

// User
route::middleware('auth.buyer')->group(function () {
    route::group(['prefix' => '/user', 'as' => 'user.'], function () {
        route::group(['prefix' => '/account', 'as' => 'account.'], function () {
            route::get('/address', [UserAccountAddressController::class, 'index'])->name('address');
            route::get('/password', [UserAccountPasswordController::class, 'index'])->name('password');
            route::get('/payment', [UserAccountPaymentController::class, 'index'])->name('payment');
            route::get('/profile', [UserAccountProfileController::class, 'index'])->name('profile');
        });

        route::group(['prefix' => '/notifications', 'as' => 'notifications.'], function () {
            route::get('/activity', [UserNotificationsActivityController::class, 'index'])->name('activity');
            route::get('/order', [UserNotificationsOrderController::class, 'index'])->name('order');
            route::get('/promotion', [UserNotificationsPromotionController::class, 'index'])->name('promotion');
            route::get('/rating', [UserNotificationsRatingController::class, 'index'])->name('rating');
            route::get('/shopee', [UserNotificationsShopeeController::class, 'index'])->name('shopee');
            route::get('/wallet', [UserNotificationsWalletController::class, 'index'])->name('wallet');
        });

        route::get('/coin', [UserCoinController::class, 'index'])->name('coin');
        route::get('/purchase', [UserPurchaseController::class, 'index'])->name('purchase');
        route::get('/voucher-wallet', [UserVoucherWalletController::class, 'index'])->name('voucher-wallet');
    });
});
// End User