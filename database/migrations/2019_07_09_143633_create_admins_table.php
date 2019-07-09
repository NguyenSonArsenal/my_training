<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('password', 128);
            $table->string('email', 128);
            $table->string('avatar', 128)->nullable();
            $table->string('role_type')->comment('super:1, admin:2');
            $table->integer('ins_id')->length(11)->comment('登録者ID');
            $table->integer('upd_id')->length(11)->comment('更新者ID')->nullable();
            $table->timestamp('ins_datetime')->comment('登録日時');
            $table->timestamp('upd_datetime')->comment('登録日時')->nullable();
            $table->char('del_flag')->default(0)->comment('削除フラグ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
