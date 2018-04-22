<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHardWaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hard_wares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpu');
            $table->string('gpu');
            $table->string('ram');
            $table->string('hd');
            $table->string('ssd');
            $table->string('screen_quality');
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
        Schema::dropIfExists('hard_wares');
    }
}
