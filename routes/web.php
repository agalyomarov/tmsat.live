<?php

use App\Http\Controllers\DillerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OpenController;
use App\Http\Controllers\PacketController;
use App\Http\Controllers\PayBalanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\SelectServerController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\ToolsController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('index');

Route::group(['middleware' => ['guest']], function () {
   Route::post('/register', [RegisterController::class, 'store'])->name('register');
   Route::post('/login', [RegisterController::class, 'login'])->name('login');
   Route::get('/open', [OpenController::class, 'index'])->name('open');
});


Route::group(['middleware' => ['auth']], function () {
   Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');
   Route::get('/news', [NewsController::class, 'index'])->name('news');
   Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
   Route::get('/pay_balance', [PayBalanceController::class, 'index'])->name('pay_balance');
   Route::get('/diller', [DillerController::class, 'index'])->name('diller');
   Route::get('/paket', [PacketController::class, 'index'])->name('paket');
   Route::get('/select_server', [SelectServerController::class, 'index'])->name('select_server');
   Route::get('/tools', [ToolsController::class, 'index'])->name('tools');
   Route::get('/regulation', [RegulationController::class, 'index'])->name('regulation');
   Route::get('/support', [SupportController::class, 'index'])->name('support');
   Route::put('/profile', [RegisterController::class, 'update'])->name('user.update');
});
