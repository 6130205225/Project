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
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('temple_event_id');
            $table->bigInteger('temple_id')->unsigned();
            $table->foreign('temple_id')->references('temple_id')->on('temples');
            $table->string('temple_event_name', 40);
            $table->string('temple_event_description', 200);
            // $table->bigInteger('temple_event_create_by')->unsigned();
            // $table->foreign('temple_event_create_by')->references('temple_id')->on('temples');
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
        Schema::dropIfExists('activities');
    }
};
