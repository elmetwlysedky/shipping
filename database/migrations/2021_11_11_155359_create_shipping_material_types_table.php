<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingMaterialTypesTable extends Migration
{

    public function up()
    {
        Schema::create('shipping_material_types', function (Blueprint $table) {
            $table->id();
            $table->string('material_type');
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('shipping_material_types');
    }
}
