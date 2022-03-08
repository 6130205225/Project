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
        Schema::create('templepics', function (Blueprint $table) {
            $table->bigIncrements('temple_pic_id');

            // $table->bigInteger('fk_temple_id')->unsigned();
            // $table->foreign('fk_temple_id')->references('temple_id')->on('temples');

            $table->string('temple_pic_url');
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
        Schema::dropIfExists('templepics');
    }
};
