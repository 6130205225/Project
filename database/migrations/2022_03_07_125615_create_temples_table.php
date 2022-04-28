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
            $table->string('temple_name', 45)->unique();
            $table->string('temple_description', 10000);
            $table->string('temple_address', 10000);
            $table->string('temple_latitude');
            $table->string('temple_longitude');

            $table->bigInteger('fk_user_id')->unsigned(); //_create_by สร้างโดย
            $table->foreign('fk_user_id')->references('user_id')->on('users');



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
