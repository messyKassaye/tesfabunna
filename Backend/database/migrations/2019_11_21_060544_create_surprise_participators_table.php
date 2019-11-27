<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurpriseParticipatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surprise_participators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('surprise_id');
            $table->string('name');
            $table->string('phone');
            $table->integer('coupon_number');
            $table->boolean('winner')->default(false);
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
        Schema::dropIfExists('surprise_participators');
    }
}
