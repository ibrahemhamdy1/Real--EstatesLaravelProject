<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bu_name',100);
            $table->string('bu_price',20);
            $table->smallInteger('bu_rent');
            $table->string('bu_square',10);
            $table->smallInteger('bu_type');
            $table->string('bu_small_dis',160);
            $table->string('bu_meta',200);
            $table->string('bu_longitude',50);
            $table->string('bu_latitude',50); 
            $table->integer('bu_palce');
            $table->longText('bu_large_dis');
            $table->smallInteger('bu_status');
            $table->timestamps();
            $table->integer('user_id');
            $table->integer('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
}
