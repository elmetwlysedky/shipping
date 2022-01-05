<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->string('email')->unique();
            $table->string('password');
            $table->string('sender_full_name');
            $table->string('sender_mother_name');


            $table->string('sender_national_id');
            $table->string('sender_phone');

             $table->string('address_sender');

            $table->string('reciver_full_name');
            $table->string('reciver_mother_name');

            $table->string('reciver_national_id');
            $table->string('reciver_phone');

            $table->string('address_reciver');
            $table->unsignedBigInteger('series_id');
            $table->foreign('series_id')->references('id')->on('series')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('number');

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
        Schema::dropIfExists('customers');
    }
}
