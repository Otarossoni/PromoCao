<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocaoCupomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocao_cupoms', function (Blueprint $table) {
            $table->bigIncrements('promocao_cupom_id');
            $table->bigInteger('promocao_id')->unsigned()->nullable();
            $table->foreign('promocao_id')->references('promocao_id')->on('promocoes');
            $table->bigInteger('cupom_id')->unsigned()->nullable();
            $table->foreign('cupom_id')->references('cupom_id')->on('cupons');
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
        Schema::dropIfExists('promocao_cupoms');
    }
}
