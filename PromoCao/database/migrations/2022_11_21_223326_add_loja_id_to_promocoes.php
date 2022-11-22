<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLojaIdToPromocoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('promocoes', function (Blueprint $table) {
            $table->bigInteger('loja_id')->unsigned()->nullable();
            $table->foreign('loja_id')->references('loja_id')->on('lojas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('promocoes', function (Blueprint $table) {
            //
        });
    }
}
