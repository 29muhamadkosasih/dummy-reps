<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\NoRekController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\CheckedController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\CashFlowController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ReportpbController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentInController;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\InvoiceOutController;
use App\Http\Controllers\Users\FormsController;
use App\Http\Controllers\Admin\RujukanController;
use App\Http\Controllers\Users\ProfileController;
use App\Http\Controllers\Admin\KeperluanController;
use App\Http\Controllers\Admin\KpengajuanController;
use App\Http\Controllers\Admin\PermissionController;

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
    Route::get('form/showDetail/{id}', [FormController::class, 'showDetail'])->name('form.showDetail');
    Route::get('form-list/print/{id}', [FormsController::class, 'printToday'])->name('form-list.print');
    Route::get('form/listAdvance', [FormController::class, 'listAdvance'])->name('listAdvance');
    Route::put('form-checked/checked/{id}', [CheckedController::class, 'checked'])->name('form-checked.checked');
    Route::get('form-checked/detail/{id}', [CheckedController::class, 'detail'])->name('form-checked.detail');
    Route::put('form-approve/approve/{id}', [ApproveController::class, 'approve'])->name('form-approve.approve');
    Route::get('form-approve/detail/{id}', [ApproveController::class, 'detail'])->name('form-approve.detail');
    Route::get('form-approve/detail/{id}', [ApproveController::class, 'detail'])->name('form-approve.detail');
    Route::get('form-approve/view/{id}', [ApproveController::class, 'view'])->name('form-approve.view');
    Route::get('form-approve/viewDetail/{id}', [ApproveController::class, 'viewDetail'])->name('form-approve.viewDetail');
    Route::get('form/detail/{id}', [FormController::class, 'detail'])->name('form.detail');
    Route::put('form/kPembayaran/{id}', [FormController::class, 'kPembayaran'])->name('form.kPembayaran');
    Route::put('form-approve/process/{id}', [ApproveController::class, 'process'])->name('form-approve.process');
    Route::get('approve/konfirmasi/{id}', [FormController::class, 'konfirmasi']);
    Route::get('approve/konfirmasiRem/{id}', [FormController::class, 'konfirmasiRem']);
    Route::get('approve/maker/{id}', [CheckedController::class, 'approve']);
    Route::get('approve/paid/{id}', [CheckedController::class, 'paid']);
    Route::get('reject/maker/{id}', [CheckedController::class, 'reject']);
    Route::get('approve/approve/{id}', [ApproveController::class, 'approve']);
    Route::get('reject/reject/{id}', [ApproveController::class, 'reject']);
    Route::get('form-list/list', [FormsController::class, 'list'])->name('list');
    Route::get('form-list/today', [FormsController::class, 'today'])->name('today');
    Route::get('form-list/resumeRf', [FormsController::class, 'resumeRf'])->name('resumeRf');
    Route::get('form-list/reportPB', [FormsController::class, 'reportPB'])->name('reportPB');
    Route::get('dashboard-checked', [DashboardController::class, 'checked'])->name('dashboard.checked');
    Route::get('dashboard-approve', [DashboardController::class, 'approve'])->name('dashboard.approve');
    Route::get('dashboard-general', [DashboardController::class, 'general'])->name('dashboard.general');
    Route::post('getLaporan', [FormsController::class, 'getLaporan'])->name('laporan.getLaporan');
    Route::post('import-file', [UserController::class, 'import'])->name('import');
    Route::post('form-list/today', [ReportpbController::class, 'saldoStore'])->name('saldoStore');
    Route::get('form/download/{file}', [FormController::class, 'download'])->name('form.download');
    Route::get('/print', [ReportpbController::class, 'showPrintView']);
    Route::get('paymentIn/report', [PaymentInController::class, 'report'])->name('paymentIn.report');
    Route::get('invoiceOut/report', [InvoiceOutController::class, 'report'])->name('invoiceOut.report');
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class)->except(['show']);
    Route::resource('bank', BankController::class);
    Route::resource('norek', NoRekController::class);
    Route::resource('form', FormController::class);
    Route::resource('reportPB', ReportpbController::class);
    Route::resource('form-approve', ApproveController::class);
    Route::resource('form-checked', CheckedController::class);
    Route::resource('form-list', FormsController::class);
    Route::resource('me', ProfileController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::resource('keperluan', KeperluanController::class);
    Route::resource('kpengajuan', KpengajuanController::class);
    Route::resource('rujukan', RujukanController::class);
    Route::resource('invoiceOut', InvoiceOutController::class);
    Route::resource('paymentIn', PaymentInController::class);
    Route::resource('cashflow', CashFlowController::class);
    Route::resource('revenue', RevenueController::class);
});
