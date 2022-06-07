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
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('review_id');

            $table->bigInteger('fk_temple_id')->unsigned();
            $table->foreign('fk_temple_id')->references('temple_id')->on('temples');

            $table->string('review_topic', 100);
            $table->text('review_description');

            $table->bigInteger('fk_review_create_by')->unsigned();
            $table->foreign('fk_review_create_by')->references('user_id')->on('users');


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
        Schema::dropIfExists('reviews');
    }
};
