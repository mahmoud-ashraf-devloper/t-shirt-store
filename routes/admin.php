<?php

use App\Http\Controllers\Admin\Auth\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware'=> 'guest:admin',
], function(){

    Route::get('/admin/login', [AdminAuthController::class, 'getLogin'])->name('admin.login');
});
Route::post('/admin/login/check', [AdminAuthController::class, 'login'])->name('admin.login.check');


Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['admin']
], function(){
    Route::get('/dashboard', function () { return view('admin-dashboard.views.index');})->name('dashboard');
    Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('logout');
});

Route::group([
    'prefix' => 'admin/dashboard/demo',
    'as' => 'admin.',
    'middleware' => ['admin']
], function(){
    Route::get('/forms', function(){ return view('admin-dashboard.views.demo.forms'); })->name('dashboard.forms');
    Route::get('/cards', function(){ return view('admin-dashboard.views.demo.cards'); })->name('dashboard.cards');
    Route::get('/charts', function(){ return view('admin-dashboard.views.demo.charts'); })->name('dashboard.charts');
    Route::get('/buttons', function(){ return view('admin-dashboard.views.demo.buttons'); })->name('dashboard.buttons');
    Route::get('/modals', function(){ return view('admin-dashboard.views.demo.modals'); })->name('dashboard.modals');
    Route::get('/tables', function(){ return view('admin-dashboard.views.demo.tables'); })->name('dashboard.tables');
    Route::get('/login', function(){ return view('admin-dashboard.views.demo.login'); })->name('dashboard.login');
    Route::get('/register', function(){ return view('admin-dashboard.views.demo.create-account'); })->name('dashboard.register');
    Route::get('/404', function(){ return view('admin-dashboard.views.demo.404'); })->name('dashboard.404');
    Route::get('/forgot-password', function(){ return view('admin-dashboard.views.demo.forgot-password'); })->name('dashboard.forgot-password');
});
