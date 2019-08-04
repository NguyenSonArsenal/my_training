<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('email', 128);
            $table->string('facebook_id', 64);
            $table->string('status', 64)->comment('1:active, 2:disable');
            $table->integer('ins_id')->length(11);
            $table->integer('upd_id')->length(11)->nullable();
            $table->timestamp('ins_datetime');
            $table->timestamp('upd_datetime')->nullable();
            $table->char('del_flag')->default(0);
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
}
