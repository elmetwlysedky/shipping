<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('amount');


            $table->string('shipment_name');



            $table->string('whieght');

            $table->string('price');


            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')
                ->on('units')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')->references('id')
                ->on('curencies')->cascadeOnDelete()->cascadeOnUpdate();



            $table->date('sender_date');
            $table->date('expected_recived_date');

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')
                ->on('shipping_material_types')->cascadeOnDelete()->cascadeOnUpdate();


            $table->unsignedBigInteger('service_type_id');
            $table->foreign('service_type_id')->references('id')
                ->on('service_types')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('costumer_id');
            $table->foreign('costumer_id')->references('id')
                ->on('customers')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('tracking_stage_id');
            $table->foreign('tracking_stage_id')->references('id')
                ->on('tracking_stages')->cascadeOnDelete()->cascadeOnUpdate();

            $table->string('address_address')->nullable();
            $table->double('address_latitude')->nullable();
            $table->double('address_longitude')->nullable();

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
        Schema::dropIfExists('shipments');
    }
}
