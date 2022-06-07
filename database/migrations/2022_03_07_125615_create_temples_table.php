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

            $table->text('temple_description');
            $table->string('temple_address', 255);

            $table->bigInteger('fk_user_id')->unsigned(); //_create_by สร้างโดย
            $table->foreign('fk_user_id')->references('user_id')->on('users')->onDelete('cascade');



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
