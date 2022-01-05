<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_sites', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('logo');
            $table->string('email');
            $table->string('phone');
            $table->string('day');
            $table->string('open_time');
            $table->string('close_time');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('linkedin_url');
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
        Schema::dropIfExists('info_sites');
    }
}
