<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('material_type_id');
            $table->foreign('material_type_id')->references('id')
                ->on('shipping_material_types')->cascadeOnDelete()->cascadeOnUpdate();


            $table->unsignedBigInteger('service_type_id');
            $table->foreign('service_type_id')->references('id')
                ->on('service_types')->cascadeOnDelete()->cascadeOnUpdate();

            $table->decimal('distance');

            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')
                ->on('units');

            $table->decimal('wheight');
            $table->decimal('price');

            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')->references('id')
                ->on('curencies');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
