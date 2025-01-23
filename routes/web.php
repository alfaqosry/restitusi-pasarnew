<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PedagangController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\SewatempatController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LaporankeuanganController;
use App\Http\Controllers\VerifikasiakunController;
use App\Models\Invoice;
use App\Models\Sewatempat;
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





Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login/post', [AuthController::class, 'post'])->name('auth.post');
Route::post('/register/store', [AuthController::class, 'store'])->name('register.store');

Route::get('/verifikasiakun', [VerifikasiakunController::class, 'index'])->name('verifikasi.pengajuan');
Route::get('/verifikasiakun/daftar-pengajuan', [VerifikasiakunController::class, 'verifikasiall'])->name('verifikasi.verifikasiall');
Route::post('/verifikasiakun/update/{id}', [VerifikasiakunController::class, 'update'])->name('verifikasi.update');
Route::get('/verifikasiakun/terima/{id}', [VerifikasiakunController::class, 'terima'])->name('verifikasi.terima');

Route::middleware(['auth', 'is_active'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/toko', [TokoController::class, 'index'])->name('toko.index');
    Route::get('/toko/create', [TokoController::class, 'create'])->name('toko.create');
    Route::post('/toko/store', [TokoController::class, 'store'])->name('toko.store');
    Route::get('/toko/edit/{id}', [TokoController::class, 'edit'])->name('toko.edit');
    Route::post('/toko/update/{id}', [TokoController::class, 'update'])->name('toko.update');

    Route::get('/pedagang', [PedagangController::class, 'index'])->name('pedagang.index');
    Route::get('/pedagang/create', [PedagangController::class, 'create'])->name('pedagang.create');
    Route::post('/pedagang/store', [PedagangController::class, 'store'])->name('pedagang.store');
    Route::get('/pedagang/edit/{id}', [PedagangController::class, 'edit'])->name('pedagang.edit');
    Route::post('/pedagang/update/{id}', [PedagangController::class, 'update'])->name('pedagang.update');


    Route::get('/sewatempat', [SewatempatController::class, 'index'])->name('sewatempat.index');
    Route::get('/sewatempat/create', [SewatempatController::class, 'create'])->name('sewatempat.create');
    Route::get('/sewatempat/show/{id}', [SewatempatController::class, 'show'])->name('sewatempat.show');
    Route::get('/sewatempat/getsewabyid/{id}', [SewatempatController::class, 'getsewabyid'])->name('sewatempat.getsewabyid');

    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
    Route::get('/transaction/success/{transaction}', [TransactionController::class, 'success'])->name('transaction.success');
    Route::get('/transaction/manual/{invoice}', [TransactionController::class, 'pembayaranmanual'])->name('transaction.manual');

    Route::get('/invoice/{id}', [InvoiceController::class, 'tagihbyid'])->name('transaction.tagihbyid');
    Route::get('/invoice', [InvoiceController::class, 'index'])->name('transaction.tagihanall');
    Route::get('/invoice/show/{id}', [InvoiceController::class, 'show'])->name('transaction.show');

    Route::get('/laporankeuangan', [LaporankeuanganController::class, 'laporankeuangan'])->name('laporankeuangan.bulanan');



   
});
