<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\InfoSiteController;
use App\Http\Controllers\Admin\PriceOrderController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\EndUser\EndUserHomeController;

use App\Http\Controllers\Admin\dileveryController;
use App\Http\Controllers\Admin\employesController;
use App\Http\Controllers\Admin\WelcomSectionController;
use App\Http\Controllers\Admin\contactController;

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){



        Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => 'auth:admin'], function() {

            Route::get('/', [AdminHomeController::class, 'index'])->name('index');



            //this  group route model delivery
            Route::group(['prefix' => 'delivery', 'as' => 'delivery.'], function () {
                Route::get('/', [dileveryController::class, 'index'])->name('index');
                Route::get('/create', [dileveryController::class, 'create'])->name('create');
                Route::POST('/store', [dileveryController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [dileveryController::class, 'edit'])->name('edit');
                Route::put('/update', [dileveryController::class, 'update'])->name('update');

                //delete used link tags
                Route::get('/destroy/{id}', [dileveryController::class, 'destroy'])->name('destroy');

                // Settings activated  display item  by default 4 items but expandable
                Route::POST('/stauts', [dileveryController::class, 'activated'])->name('stauts');

                // Settings activated  display item  limited just Two show required (activatedII -> (II)  number 2 language Latin )
                Route::put('/stautsII', [dileveryController::class, 'activatedII'])->name('stautsII');
                // Settings  record view page
                Route::get('/record', [dileveryController::class, 'record'])->name('record');
                // Settings  control limited View records page (Home)
                Route::put('/records', [dileveryController::class, 'records'])->name('records');
            }) ;

            //this  group route model employe
            Route::group(['prefix' => 'employe', 'as' => 'employe.'], function () {

                Route::get('/', [employesController::class, 'index'])->name('index');
                Route::get('/create', [employesController::class, 'create'])->name('create');
                Route::post('/store', [employesController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [employesController::class, 'edit'])->name('edit');
                Route::put('/update', [employesController::class, 'update'])->name('update');
                Route::get('/destroy/{id}', [employesController::class, 'destroy'])->name('destroy');
                // Settings  control Display show just one employe item in page (Home)
                Route::get('/display/{id}/{bool}', [employesController::class, 'IsDisplayActive'])->name('activated');

            });

            //Settings this  group route model welcome-section-Title
            Route::group(['prefix' => 'welcome', 'as' => 'welcome.'], function () {

                Route::get('/', [WelcomSectionController::class, 'index'])->name('index');
                Route::get('/create', [WelcomSectionController::class, 'create'])->name('create');
                Route::post('/store', [WelcomSectionController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [WelcomSectionController::class, 'edit'])->name('edit');
                Route::put('/update', [WelcomSectionController::class, 'update'])->name('update');
                // Settings  control Display show just one welcome-section item in  page (Home)
                Route::get('/display/{id}/{bool}', [WelcomSectionController::class, 'IsDisplayActive'])->name('activated');
                Route::get('/destroy/{id}', [WelcomSectionController::class, 'destroy'])->name('destroy');

            });


            #========================InfoSite Routes===============================#
            Route::group(['prefix' => 'info-site', 'as' => 'info-site.'], function () {
                Route::get('/', [InfoSiteController::class, 'index'])->name('index');
                Route::get('/create', [InfoSiteController::class, 'create'])->name('create');
                Route::post('/store', [InfoSiteController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [InfoSiteController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
                Route::put('/update', [InfoSiteController::class, 'update'])->name('update');
                Route::delete('/delete', [InfoSiteController::class, 'delete'])->name('delete');
            });

            #========================PriceOrder Routes===============================#
            Route::group(['prefix' => 'price-order', 'as' => 'priceOrder.'], function () {
                Route::get('/', [PriceOrderController::class, 'index'])->name('index');
                Route::get('/create', [PriceOrderController::class, 'create'])->name('create');
                Route::post('/store', [PriceOrderController::class, 'store'])->name('store');
                Route::get('/show/{id}', [PriceOrderController::class, 'show'])->name('show')->where(['id' => '[0-9]+']);
                Route::put('/update', [PriceOrderController::class, 'update'])->name('update');
                Route::delete('/delete', [PriceOrderController::class, 'delete'])->name('destroy');
            });

            #========================Testimonials Routes===============================#
            Route::group(['prefix' => 'testimonials', 'as' => 'testimonial.'], function() {
               Route::get('/', [TestimonialController::class, 'index'])->name('index');
               Route::get('/unread', [TestimonialController::class, 'unread'])->name('unread');
               Route::post('/store', [TestimonialController::class, 'store'])->name('store');
               Route::get('/show/{id}', [TestimonialController::class, 'show'])->name('show')->where(['id' => '[0-9]+']);
               Route::put('/update', [TestimonialController::class, 'update'])->name('update');
               Route::Delete('/delete', [TestimonialController::class, 'destroy'])->name('destroy');
            });

            #========================Partners Routes===============================#
            Route::group(['prefix' => 'partner', 'as' => 'partner.'], function() {
                Route::get('/', [PartnerController::class, 'index'])->name('index');
                Route::get('/create', [PartnerController::class, 'create'])->name('create');
                Route::post('/store', [PartnerController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [PartnerController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
                Route::put('/update', [PartnerController::class, 'update'])->name('update');
                Route::Delete('/delete', [PartnerController::class, 'destroy'])->name('destroy');
            });

        });
    });


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::group(['prefix' => '/', 'as' => 'endUser.'], function() {

        Route::get('/', [EndUserHomeController::class, 'index'])->name('index');
        Route::get('/testimonial', [EndUserHomeController::class, 'testimonial'])->name('testimonial');

        Route::get('contact/create', 'admin\contactController@create')->name('contact.create');
        Route::post('contact/store', 'admin\contactController@store')->name('contact.store');
    });







   require __DIR__.'/auth.php';
});






