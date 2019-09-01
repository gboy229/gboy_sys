<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',20)->unique()->comment('用户名');
            $table->string('password')->comment('密码');
            $table->string('realname','20')->comment('姓名');
            $table->string('role')->comment('管理权限');
            $table->timestamp('login_time')->nullable()->comment('登录时间');
            $table->char('login_ip','20')->nullable()->comment('登录IP');
            $table->integer('login_num')->default(0)->comment('登录次数');
            $table->rememberToken();
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
        Schema::dropIfExists('admin');
    }
}
