<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewpics', function (Blueprint $table) {
            $table->bigIncrements('review_pic_id');

            $table->bigInteger('fk_review_id')->unsigned();
            $table->foreign('fk_review_id')->references('review_id')->on('reviews');

            $table->bigInteger('fk_temple_id')->unsigned();
            $table->foreign('fk_temple_id')->references('temple_id')->on('temples');

            $table->string('review_pic_url');
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
        Schema::dropIfExists('reviewpics');
    }
};
