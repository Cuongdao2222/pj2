<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGroupgiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_gift', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type');
            $table->integer('gift');
            $table->integer('gift1');
            $table->integer('gift2');
            $table->integer('time');
            $table->text('group_name');
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
        Schema::dropIfExists('group_gift');
    }
}
