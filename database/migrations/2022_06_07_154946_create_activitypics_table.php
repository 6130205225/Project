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
        Schema::create('activitypics', function (Blueprint $table) {
            $table->bigIncrements('activity_pic_id');

            $table->bigInteger('fk_activity_id')->unsigned();
            $table->foreign('fk_activity_id')->references('activity_id')->on('activities')->onDelete('cascade');

            $table->bigInteger('fk_temple_id')->unsigned();
            $table->foreign('fk_temple_id')->references('temple_id')->on('temples')->onDelete('cascade');

            $table->string('activity_pic_url');
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
        Schema::dropIfExists('activitypics');
    }
};
