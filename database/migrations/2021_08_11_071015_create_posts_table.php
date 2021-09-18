<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->integer('user_id');
            // 副業先の企業名
            $table->string('fukugyo_company')->default('未設定');
        //  　 副業先の業種
            $table->string('fukugyo_industry')->default('未設定');
            // 副業先の月業務予定時間
            $table->integer('fukugyo_time')->default(0);
            //副業先の業務内容
            $table->string('fukugyo_naiyou',60)->default('未設定');
            // いつ分の申請か
             $table->string('subbmit_month')->default('未設定');
            //承認の有無のこと
            $table->string('status')->default('未承認');
             
            $table->string('judge')->default('承認待');;
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
        Schema::dropIfExists('posts');
    }
}
