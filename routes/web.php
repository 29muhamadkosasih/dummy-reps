<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\NoRekController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\CheckedController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Users\FormsController;
use App\Http\Controllers\Users\ProfileController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\KeperluanController;
use App\Http\Controllers\Admin\KpengajuanController;
use App\Http\Controllers\Admin\RujukanController;

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
    return view('auth.login');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('home', [StaterkitController::class, 'home'])->name('home');
    Route::get('lang/{locale}', [LanguageController::class, 'swap']);
    Route::get('layouts/empty', [StaterkitController::class, 'layout_empty'])->name('layout.empty');
    Route::get('form/print/{id}', [FormController::class, 'print'])->name('form.print');
    Route::get('form/listAdvance', [FormController::class, 'listAdvance'])->name('listAdvance');
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/permissions', PermissionController::class)->except(['show']);
    Route::resource('bank', BankController::class);
    Route::resource('norek', NoRekController::class);
    Route::resource('form', FormController::class);
    Route::resource('form-approve', ApproveController::class);
    Route::resource('form-checked', CheckedController::class);
    Route::resource('form-list', FormsController::class);
    Route::resource('me', ProfileController::class);
    Route::put('form-checked/checked/{id}', [CheckedController::class, 'checked'])->name('form-checked.checked');
    Route::get('form-checked/detail/{id}', [CheckedController::class, 'detail'])->name('form-checked.detail');
    Route::put('form-approve/approve/{id}', [ApproveController::class, 'approve'])->name('form-approve.approve');
    Route::get('form-approve/detail/{id}', [ApproveController::class, 'detail'])->name('form-approve.detail');
    Route::get('form-approve/view/{id}', [ApproveController::class, 'view'])->name('form-approve.view');
    Route::get('form-approve/viewDetail/{id}', [ApproveController::class, 'viewDetail'])->name('form-approve.viewDetail');
    Route::get('form/detail/{id}', [FormController::class, 'detail'])->name('form.detail');
    Route::put('form/kPembayaran/{id}', [FormController::class, 'kPembayaran'])->name('form.kPembayaran');
    Route::put('form-approve/process/{id}', [ApproveController::class, 'process'])->name('form-approve.process');

    Route::get('approve/konfirmasi/{id}', [FormController::class, 'konfirmasi']);


    Route::get('approve/maker/{id}', [CheckedController::class, 'approve']);

    Route::get('reject/maker/{id}', [CheckedController::class, 'reject']);
    Route::get('approve/approve/{id}', [ApproveController::class, 'approve']);
    Route::get('/form/{id}', [FormController::class, 'getBank']);
    Route::resource('dashboard', DashboardController::class);
    Route::get('dashboard-checked', [DashboardController::class, 'checked'])->name('dashboard.checked');
    Route::get('dashboard-approve', [DashboardController::class, 'approve'])->name('dashboard.approve');
    Route::get('dashboard-general', [DashboardController::class, 'general'])->name('dashboard.general');
    Route::resource('keperluan', KeperluanController::class);
    Route::resource('kpengajuan', KpengajuanController::class);
    Route::resource('rujukan', RujukanController::class);
});