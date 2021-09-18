<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('company')->nullable();
            $table->string('organization')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // ゲート機能の実装
            // $table->integer('permission_id')->unsigned()->comment('権限ID')->after('address3');
            // $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            // 権限
            $table->integer('authority');
            
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
        Schema::dropIfExists('users');
        $table->dropForeign('users_permission_id_foreign');
    }
}
