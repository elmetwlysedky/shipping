<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumndBooleanIsActvieSectionWelcomeDilevery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_types', function (Blueprint $table) {
            $table->boolean('is_active_section')->default(0);
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
            $table->dropColumn('is_active_section');
        });
    }
}
