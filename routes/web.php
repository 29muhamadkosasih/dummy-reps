<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoRekController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\CheckedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\FormController as FormsController;

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
    return view('pages.login.index');
});

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authanticate']);
Route::get('logout', [AuthController::class,'logout']);


    Route::get('form/print/{id}', [FormController::class, 'print'])->name('form.print');
    Route::resource('form', FormController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::resource('form-approve', ApproveController::class);
    Route::resource('form-checked', CheckedController::class);

    Route::resource('me', ProfileController::class);
    Route::resource('user', UserController::class);
    Route::resource('norek', NoRekController::class);
    Route::resource('bank', BankController::class);

    Route::put('form-checked/checked/{id}', [CheckedController::class, 'checked'])->name('form-checked.checked');
    Route::get('form-checked/detail/{id}', [CheckedController::class, 'detail'])->name('form-checked.detail');

    Route::put('form-approve/approve/{id}', [ApproveController::class, 'approve'])->name('form-approve.approve');
    Route::get('form-approve/detail/{id}', [ApproveController::class, 'detail'])->name('form-approve.detail');

    Route::resource('form-list', FormsController::class);

    Route::get('approve/maker/{id}', [CheckedController::class, 'approve']);
    Route::get('reject/maker/{id}', [CheckedController::class, 'reject']);

    Route::get('approve/approve/{id}', [ApproveController::class, 'approve']);