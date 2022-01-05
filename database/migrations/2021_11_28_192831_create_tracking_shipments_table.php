<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *tracking_stage_id customer_id entering_date outcomming_date location_now
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_shipments', function (Blueprint $table) {
            $table->id();
            $table->text('desc');

            $table->unsignedBigInteger('tracking_stage_id');
            $table->foreign('tracking_stage_id')->references('id')
                ->on('tracking_stages')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')
                ->on('customers')->cascadeOnDelete()->cascadeOnUpdate();


            $table->string('full_number');
            $table->date('outcomming_date');
            $table->string('location_now');


            $table->integer('tracking_id');
            $table->string('tracking_type');


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
        Schema::dropIfExists('tracking_shipments');
    }
}
