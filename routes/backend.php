
<?php

use Illuminate\Support\Facades\Route;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\PriceController;

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


Route::get('/Dashboard_Admin', [AdminHomeController::class,'index']);
Route::get('/empty_page', [AdminHomeController::class,'index']);



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::get('/dashboard/user', function () {
        return view('Dashboard.User.index');
    })->middleware(['auth'])->name('dashboard.user');


    Route::get('/dashboard/scanner', function () {
        return view('Dashboard.Scanner.index');
    })->middleware(['auth:scanner'])->name('dashboard.scanner');


    Route::get('/dashboard/driver', function () {
        return view('Dashboard.Driver.index');
    })->middleware(['auth:driver'])->name('dashboard.driver');

    Route::get('/dashboard/warehouse', function () {
        return view('Dashboard.WarehousingOfficer.index');
    })->middleware(['auth:warehousing_officer'])->name('dashboard.warehouse');


    Route::get('/dashboard/admin', function () {
        return view('Dashboard.Admin.index');
    })->middleware(['auth:admin'])->name('dashboard.admin');

    Route::get('/empty_page', function () {
        return view('Dashboard.Admin.empty_page');
    });




    //Route::get('/users', [UserController::class, 'index']); error

        Route::group(['middleware' => 'auth:web'], function() {
            route::view('Add_shipment','Livewire.show_shipping_form');

            Route::view('show_tracking','Livewire.show_tracking_form');


    });



    Route::group(['middleware' => 'auth:admin'], function() {

        Route::resource('admins_tracks', 'AdminTrackController');

        Route::resource('prices' , 'PriceController');

    });


    Route::group(['middleware' => 'auth:scanner'], function() {

        Route::resource('scanner_tracks', 'ScannerTrackController');
    });

    Route::group(['middleware' => 'auth:driver'], function() {

        Route::resource('drivers_tracks', 'DriverTrackController');
    });


    Route::group(['middleware' => 'auth:warehousing_officer'], function() {

        Route::resource('warehouse_tracks', 'WarehouseTrackController');
    });



//route news and convention//////////
    Route::resource('news', 'newsController');
    Route::resource('convention', 'conventionController');


    //route news , convention and contact//////////
        Route::resource('news', 'newsController');
        Route::resource('convention', 'conventionController');


        Route::get('contacts','contactController@index')->name('contact.index');
        Route::get('contact/{id}','contactController@show')->name('contact.show');
        Route::Delete('contacts/{id}','contactController@destroy')->name('contact.destroy');


    Route::get('mark_all_contact','MarkallController@MarkAsRead_contact')->name('mark_read_contact');
    Route::get('mark_all_shipments','MarkallController@MarkAsRead_shipments')->name('mark_read_shipments');
    Route::get('mark_all_priceOrder','MarkallController@MarkAsRead_priceOrder')->name('mark_read_priceOrder');
    Route::get('mark_all_scanner','MarkallController@MarkAsRead_scanner')->name('mark_read_scanner');



    ///////////////
    require __DIR__.'/auth.php';
});



