<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\PacketController as AdminPacketController;
use App\Http\Controllers\Admin\UserController;
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

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => "admin"], function () {
   Route::get('/', [UserController::class, 'index'])->name('admin.users');
   Route::post('/', [UserController::class, 'store'])->name('admin.users.store');
   Route::get('/users/{login}', [UserController::class, 'edit'])->name('admin.users.edit');
   Route::put('/users/{login}', [UserController::class, 'update'])->name('admin.users.update');
   Route::get('/packet', [AdminPacketController::class, 'index'])->name('admin.packet.index');
   Route::post('/packet', [AdminPacketController::class, 'store'])->name('admin.packet.store');
   Route::get('/packet/{id}', [AdminPacketController::class, 'edit'])->name('admin.packet.edit');
   Route::put('/packet/{id}', [AdminPacketController::class, 'update'])->name('admin.packet.update');
   Route::delete('/packet/{id}', [AdminPacketController::class, 'delete'])->name('admin.packet.delete');
   Route::get('/news', [AdminNewsController::class, 'index'])->name('admin.news.index');
   Route::post('/news', [AdminNewsController::class, 'store'])->name('admin.news.store');
   Route::get('/news/{post}', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
   Route::put('/news/{post}', [AdminNewsController::class, 'update'])->name('admin.news.update');
   Route::get('/news/{post}/delete', [AdminNewsController::class, 'delete'])->name('admin.news.delete');
});

Route::group(['middleware' => ['auth'], 'prefix' => "diller"], function () {
   Route::post('/', [DillerController::class, 'addUser'])->name('diller.addUser');
   Route::get('/user/{user}/get', [DillerController::class, 'edit'])->name('diller.user.edit');
   Route::get('/user/{user}', [DillerController::class, 'buyPacket'])->name('diller.user.packet');
});
