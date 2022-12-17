<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin-dashboard.views.index');
})->name('admin-dashboard');


Route::group([
    'prefix' => 'admin',
    'as' => 'admin-dashboard.'
], function(){



Route::get('/forms', function(){ return view('admin-dashboard.views.demo.forms'); })->name('forms');
Route::get('/cards', function(){ return view('admin-dashboard.views.demo.cards'); })->name('cards');
Route::get('/charts', function(){ return view('admin-dashboard.views.demo.charts'); })->name('charts');
Route::get('/buttons', function(){ return view('admin-dashboard.views.demo.buttons'); })->name('buttons');
Route::get('/modals', function(){ return view('admin-dashboard.views.demo.modals'); })->name('modals');
Route::get('/tables', function(){ return view('admin-dashboard.views.demo.tables'); })->name('tables');
Route::get('/login', function(){ return view('admin-dashboard.views.demo.login'); })->name('login');
Route::get('/register', function(){ return view('admin-dashboard.views.demo.create-account'); })->name('register');
Route::get('/404', function(){ return view('admin-dashboard.views.demo.404'); })->name('404');
Route::get('/forgot-password', function(){ return view('admin-dashboard.views.demo.forgot-password'); })->name('forgot-password');
});