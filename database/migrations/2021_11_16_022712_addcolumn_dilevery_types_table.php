<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddcolumnDileveryTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_types', function (Blueprint $table) {
            $table->longText('title_main');
            $table->longText('title_sup');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delivery_types', function (Blueprint $table) {
            $table->dropColumn('title_main');
            $table->dropColumn('title_sup');
          
        });
    }
}
