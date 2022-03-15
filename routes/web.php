<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Hash;
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
    return view('welcome');
});
// Route::get('changepassword', function() {
//     $user = App\Models\User::where('email', 'super_admin@app.com')->first();
//     $user->password = Hash::make('12345678');
//     $user->save();

//     echo 'Password changed successfully.';
// });
//  routing site page

    Route::get('/' , [App\Http\Controllers\Site\SiteController::class , 'index'])->name('front');
    Route::get('/about' , [App\Http\Controllers\Site\SiteController::class , 'about'])->name('about');
    Route::get('/contact' , [App\Http\Controllers\Site\SiteController::class , 'contact'])->name('contact');

    Route::get('/pre-order' , [App\Http\Controllers\Site\SiteController::class , 'preOrder'])->name('preOrder');
    Route::post('/contactUs',[App\Http\Controllers\Site\SiteController::class , 'contactUs'])->name('contactUs');
    Route::post('/orderRequest',[App\Http\Controllers\Site\SiteController::class , 'orderRequest'])->name('orderRequest');
    Route::get('/service-details/{id}' , [App\Http\Controllers\Site\SiteController::class , 'service_details'])->name('service-details');


