<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSWelcomeTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_welcome_titles', function (Blueprint $table) {
            $table->id();
            //name for tags
            $table->string('title_p'); // <p>   
             
            $table->string('title_h');  // <h1> 
               
            $table->string('title_span'); // <span> 
            
            $table->boolean('is_active')->default(0); // control in disblay
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
        Schema::dropIfExists('s_welcome_titles');
    }
}
