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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('user_firstname', 45);
            $table->string('user_lastname', 45);
            $table->string('username', 45)->unique();
            $table->string('password');

            // $table->bigInteger('fk_user_role_id')->unsigned(); //_create_by สร้างโดย
            // $table->foreign('fk_user_role_id')->references('user_role_id')->on('userroles');

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
        Schema::dropIfExists('users');
    }
};
