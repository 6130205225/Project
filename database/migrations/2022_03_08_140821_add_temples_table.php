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
        Schema::table('temples', function (Blueprint $table) {
            $table->bigInteger('fk_temple_type_id')->unsigned(); //_create_by สร้างโดย
            $table->foreign('fk_temple_type_id')->references('temple_type_id')->on('templetypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temples', function (Blueprint $table) {
            //
        });
    }
};
