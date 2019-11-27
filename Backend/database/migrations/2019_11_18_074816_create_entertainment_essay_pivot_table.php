<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntertainmentEssayPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entertainment_essay', function (Blueprint $table) {
            $table->integer('entertainment_id')->unsigned()->index();
            $table->foreign('entertainment_id')->references('id')->on('entertainment')->onDelete('cascade');
            $table->integer('essay_id')->unsigned()->index();
            $table->foreign('essay_id')->references('id')->on('essay')->onDelete('cascade');
            $table->primary(['entertainment_id', 'essay_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entertainment_essay');
    }
}
