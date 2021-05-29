<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
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
    return view('welcome');

});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/contact', [\App\Http\Controllers\ContactUsFormController::class, 'createForm'])->name('contact');

Route::post('home/contactsave', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
