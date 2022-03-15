<?php

use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\MediatorController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CityrController;
use App\Http\Controllers\Admin\EmployerController;
use App\Http\Controllers\Admin\IncomeTypeController;
use App\Http\Controllers\Admin\BusinessSectorController;
use App\Http\Controllers\Admin\SponserController;
use App\Http\Controllers\Admin\BankrController;
use App\Http\Controllers\Admin\RealEstateStatusController;
use App\Http\Controllers\Admin\PaymentStatusController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ReceiptController;
use App\Http\Controllers\Admin\RealEstateTypeController;
use App\Http\Controllers\Admin\ProductDescriptionController;
use App\Http\Controllers\Admin\LicenseTypeController;
use App\Http\Controllers\Admin\EarthStatusController;
use App\Http\Controllers\Admin\EarthTypeController;
use App\Http\Controllers\Admin\RateEmployeeController;
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


/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'permission']], function () {
    // Route::get('changepassword', function() {
    //     $user = App\Models\User::where('email', 'super_admin@app.com')->first();
    //     $user->password = Hash::make('12345678');
    //     $user->save();

    //     echo 'Password changed successfully.';
    // });
    Route::get('/', function () {
        return view('admin.index');
    })->middleware(['auth'])->name('dashboard');
    Route::resource('/slider', SliderController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('permissions', PermissionsController::class);
    Route::resource('/social', SocialController::class);
    Route::resource('/partner', PartnerController::class);
    Route::resource('users', UserController::class);
    Route::resource('city', CityrController::class);
    Route::resource('bank', BankrController::class);
    Route::resource('business_sector', BusinessSectorController::class);
    Route::resource('employer', EmployerController::class);
    Route::resource('income_type', IncomeTypeController::class);
    Route::resource('sponser', SponserController::class);
    Route::resource('product_type', ProductTypeController::class);
    Route::resource('Payment_status', PaymentStatusController::class);
    Route::resource('invoice', InvoiceController::class);
    Route::resource('/page', PageController::class);
    Route::resource('/feature', FeatureController::class);
    Route::resource('/mediator', MediatorController::class);
    Route::resource('/real_estate_type', RealEstateTypeController::class);
    Route::resource('/real_estate_status', RealEstateStatusController::class);
    Route::resource('/product_description', ProductDescriptionController::class);
    Route::resource('/license_type', LicenseTypeController::class);
    Route::resource('/earth_status', EarthStatusController::class);
    Route::resource('/earth_type', EarthTypeController::class);
    Route::resource('/rate_employee', RateEmployeeController::class);

    Route::post('employer_data',[App\Http\Controllers\Admin\ReceiptController::class, 'employer_data'])->name('employer_data');
    Route::post('bank_emp_data',[App\Http\Controllers\Admin\ReceiptController::class, 'bank_emp_data'])->name('bank_emp_data');
    Route::post('real_estate_types',[App\Http\Controllers\Admin\ReceiptController::class, 'real_estate_types'])->name('real_estate_types');
    Route::get('/receipts/accept/{id}', 'App\Http\Controllers\Admin\ReceiptController@accept')->name('receipts.accept');
    Route::get('/receipts/reject/{id}', 'App\Http\Controllers\Admin\ReceiptController@reject')->name('receipts.reject');
    Route::get('/receipts/delay', 'App\Http\Controllers\Admin\ReceiptController@delay')->name('receipts.delay');
    Route::get('/receipts/forward', 'App\Http\Controllers\Admin\ReceiptController@forward')->name('receipts.forward');
    Route::resource('/receipts', ReceiptController::class);

    Route::get('/archive','App\Http\Controllers\Admin\ArchiveController@index')->name('archive');
    Route::DELETE('/archive/destroy/{id}','App\Http\Controllers\Admin\ArchiveController@destroy')->name('archive.destroy');
    Route::get('/receipts/archive/{id}', 'App\Http\Controllers\Admin\ArchiveController@archive')->name('receipts.archive');
    Route::get('/receipts/un_archive/{id}', 'App\Http\Controllers\Admin\ArchiveController@un_archive')->name('receipts.un_archive');

    Route::get('/invoice/accept/{id}', 'App\Http\Controllers\Admin\InvoiceController@accept')->name('invoice.accept');
    Route::get('/invoice/reject/{id}', 'App\Http\Controllers\Admin\InvoiceController@reject')->name('invoice.reject');
    Route::get('/invoice/forward', 'App\Http\Controllers\Admin\InvoiceController@forward')->name('invoice.forward');
    Route::get('/invoice/delay', 'App\Http\Controllers\Admin\InvoiceController@delay')->name('invoice.delay');

    Route::get('/setting', 'App\Http\Controllers\Admin\SettingController@index')->name('setting');
    Route::put('/setting_update', 'App\Http\Controllers\Admin\SettingController@update')->name('setting_update');
    Route::get('/contact', 'App\Http\Controllers\Admin\ContactController@index')->name('contact.index');
    Route::get('/contact/show/{id}', 'App\Http\Controllers\Admin\ContactController@show')->name('contact.show');
    Route::get('/contact/replay/{id}', 'App\Http\Controllers\Admin\ContactController@replay')->name('contact.replay');
    Route::DELETE('/contact/destroy/{id}', 'App\Http\Controllers\Admin\ContactController@destroy')->name('contact.destroy');
    Route::post('contact_replay', 'App\Http\Controllers\Admin\ContactController@contact_replay')->name('contact_replay');
    Route::get('/order', 'App\Http\Controllers\Admin\OrderController@index')->name('order.index');
    Route::get('/order/show/{id}', 'App\Http\Controllers\Admin\OrderController@show')->name('order.show');

    Route::prefix('page')->group(function () {
        Route::get('/home', 'App\Http\Controllers\Admin\PageController@index')->name('page.index');
        Route::put('/home_update/{id}', 'App\Http\Controllers\Admin\PageController@update')->name('page.update');
        Route::get('/about', 'App\Http\Controllers\Admin\PageController@about')->name('page.about');
        Route::put('/about_update/{id}', 'App\Http\Controllers\Admin\PageController@update')->name('page.update');
        Route::get('/contact', 'App\Http\Controllers\Admin\PageController@contact')->name('page.contact');
        Route::put('/contact_update/{id}', 'App\Http\Controllers\Admin\PageController@update')->name('page.update');
        Route::get('/services', 'App\Http\Controllers\Admin\PageController@services')->name('page.services');
        Route::put('/services_update/{id}', 'App\Http\Controllers\Admin\PageController@update')->name('page.update');
        Route::get('/jobs', 'App\Http\Controllers\Admin\PageController@jobs')->name('page.jobs');
        Route::put('/jobs_update/{id}', 'App\Http\Controllers\Admin\PageController@update')->name('page.update');
        Route::get('/feature', 'App\Http\Controllers\Admin\PageController@feature')->name('page.feature');
        Route::put('/feature_update/{id}', 'App\Http\Controllers\Admin\PageController@update')->name('page.update');
        Route::get('/clients', 'App\Http\Controllers\Admin\PageController@clients')->name('page.clients');
        Route::put('/clients_update/{id}', 'App\Http\Controllers\Admin\PageController@update')->name('page.update');
    });
});

require __DIR__ . '/auth.php';
