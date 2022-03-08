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
        Schema::create('reviewcomments', function (Blueprint $table) {
            $table->bigIncrements('review_comment_id');

            $table->bigInteger('fk_temple_id')->unsigned();
            $table->foreign('fk_temple_id')->references('temple_id')->on('temples');

            $table->bigInteger('fk_review_id')->unsigned();
            $table->foreign('fk_review_id')->references('review_id')->on('reviews');

            $table->string('review_comment_detail', 45);
            $table->integer('review_comment_by');
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
        Schema::dropIfExists('reviewcomments');
    }
};
