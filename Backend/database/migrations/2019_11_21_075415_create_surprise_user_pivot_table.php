<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurpriseUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surprise_user', function (Blueprint $table) {
            $table->integer('surprise_id')->unsigned()->index();
            $table->foreign('surprise_id')->references('id')->on('surprise')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->index();
            $table->boolean('winner')->default(false);
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->primary(['surprise_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surprise_user');
    }
}
