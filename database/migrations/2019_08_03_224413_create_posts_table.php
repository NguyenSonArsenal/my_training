<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->default(1)->comment('active:1, disable:2');
            $table->string('title', 70);
            $table->string('description', 170);
            $table->text('content');
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
        Schema::dropIfExists('posts');
    }
}

