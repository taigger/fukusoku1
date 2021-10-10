<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ararts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyname')->nullable();
            $table->integer('ng_time')->default(0);
            $table->string('ng_industry')->default('未設定');
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
        Schema::dropIfExists('arartSettings');
    }
}
