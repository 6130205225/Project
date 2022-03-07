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
        Schema::create('temples', function (Blueprint $table) {
            $table->bigIncrements('temple_id');
            $table->integer('temple_type_id');
            $table->string('temple_name', 45);
            $table->string('temple_description', 45);
            $table->string('temple_address', 45);
            $table->string('temple_latitude');
            $table->string('temple_longitude');
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
        Schema::dropIfExists('temples');
    }
};
