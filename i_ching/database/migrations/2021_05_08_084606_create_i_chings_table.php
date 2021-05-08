<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIChingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kejitbl', function (Blueprint $table) {
            $table->id();
            $table->text('keji_name');
            $table->text('keji_detail');
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
        Schema::dropIfExists('i_chings');
    }
}
