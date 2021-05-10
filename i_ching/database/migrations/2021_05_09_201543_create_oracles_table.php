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

       
        // テーブルkojiを追加
        Schema::create('koji_tbl', function (Blueprint $table) {
            $table->id();
            $table->text('koji_no');
            $table->text('koji_detail');
            $table->timestamps();
        });

        Schema::create('history_tbl', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->text('keji_no');
            $table->text('koji_no');
            $table->timestamps('create_date');
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
