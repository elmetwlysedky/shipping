<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            AdminTableSeeder::class,
            CountrySeeder::class,
            CurrencySeeder::class,
            SeriesSeeder::class,
            UnitSeeder::class,
            DriverSeeder::class,
            ScannerSeeder::class,
            WarehouseSeeder::class,
            ServiceTypeSeeder::class,
            ShippingMaterialTypeSeeder::class,
            TrackingStageSeeder::class,
        ]);
    }
}
