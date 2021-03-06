<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOraclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oracles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('keji_name');
            $table->text('keji_detail');
            $table->text('keji1_img_path');
            $table->text('keji2_img_path');
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
        Schema::dropIfExists('oracles');
    }
}
