<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\ReferralController;

Route::get('/', function () {
    return view('home');
});





// Authentication routes
Auth::routes();


Route::group(['middleware' => ['auth']], function() {

    Route::get('admin/referral', [ReferralController::class, 'referFriend'])->name('referral');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('/admin/users', UserController::class);
    Route::post('/admin/{user}/ban', [UserController::class, 'toggleBan'])->name('admin.users.ban');

    Route::resource('/admin/roles', RoleController::class);
    Route::resource('/admin/permissions', PermissionController::class);


    Route::get('/admin/profile/edit', [AdminController::class, 'editprofile'])->name('admin.profile.edit');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/mywallet', [AdminController::class, 'mywallet'])->name('admin.mywallet');

    Route::get('admin/wallets', [WalletController::class, 'index'])->name('admin.wallets.index');
    Route::get('admin/wallets/{userId}', [WalletController::class, 'show'])->name('admin.wallets.show');


    Route::get('/admin/settings', [SettingsController::class, 'index'])->name('admin.settings.index');
    Route::post('/admin/settings', [SettingsController::class, 'store'])->name('admin.settings.store');

    Route::get('/admin/transactions', [TransactionController::class, 'index'])->name('admin.transactions');
});




