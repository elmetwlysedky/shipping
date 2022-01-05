<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminHomeInterface',
            'App\Http\Repositories\Admin\AdminHomeRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\dileveryInterface',
            'App\Http\Repositories\Admin\dileveryRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\employessInterface',
            'App\Http\Repositories\Admin\employesRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\SectionTags\WelcomeInterface',
            'App\Http\Repositories\Admin\SectionTags\WelocmeRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\InfoSiteInterface',
            'App\Http\Repositories\Admin\InfoSiteRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\PriceOrderInterface',
            'App\Http\Repositories\Admin\PriceOrderRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\TestimonialInterface',
            'App\Http\Repositories\Admin\TestimonialRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\PartnerInterface',
            'App\Http\Repositories\Admin\PartnerRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\newsInterface',
            'App\Http\Repositories\Admin\newsRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\conventionInterface',
            'App\Http\Repositories\Admin\conventionRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\contactInterface',
            'App\Http\Repositories\Admin\contactRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\EndUser\EndUserHomeInterface',
            'App\Http\Repositories\EndUser\EndUserHomeRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\PriceInterface',
            'App\Http\Repositories\Admin\PriceRepository'
        );
  }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
