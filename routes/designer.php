<?php

use App\Http\Controllers\Designer\Auth\DesignerAuthController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware'=> 'guest:designer',
], function(){

    Route::get('/designer/login', [DesignerAuthController::class, 'getLogin'])->name('designer.login');
});
Route::post('/designer/login/check', [DesignerAuthController::class, 'login'])->name('designer.login.check');

// Route::get('/designer/dashboard', function () { return view('designer-dashboard.views.index');})->name('dashboard');

Route::group([
    'prefix' => 'designer',
    'as' => 'designer.',
    'middleware' => ['designer']
], function(){
    Route::get('/dashboard', function () { return view('designer-dashboard.views.index');})->name('dashboard');
    Route::get('/designer/logout', [DesignerAuthController::class, 'logout'])->name('logout');
});

Route::group([
    'prefix' => 'designer/dashboard/demo',
    'as' => 'designer.',
    'middleware' => ['designer']
], function(){
    Route::get('/forms', function(){ return view('designer-dashboard.views.demo.forms'); })->name('dashboard.forms');
    Route::get('/cards', function(){ return view('designer-dashboard.views.demo.cards'); })->name('dashboard.cards');
    Route::get('/charts', function(){ return view('designer-dashboard.views.demo.charts'); })->name('dashboard.charts');
    Route::get('/buttons', function(){ return view('designer-dashboard.views.demo.buttons'); })->name('dashboard.buttons');
    Route::get('/modals', function(){ return view('designer-dashboard.views.demo.modals'); })->name('dashboard.modals');
    Route::get('/tables', function(){ return view('designer-dashboard.views.demo.tables'); })->name('dashboard.tables');
    Route::get('/login', function(){ return view('designer-dashboard.views.demo.login'); })->name('dashboard.login');
    Route::get('/register', function(){ return view('designer-dashboard.views.demo.create-account'); })->name('dashboard.register');
    Route::get('/404', function(){ return view('designer-dashboard.views.demo.404'); })->name('dashboard.404');
    Route::get('/forgot-password', function(){ return view('designer-dashboard.views.demo.forgot-password'); })->name('dashboard.forgot-password');
});
