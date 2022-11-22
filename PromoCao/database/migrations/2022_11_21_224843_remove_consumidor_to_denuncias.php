<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveConsumidorToDenuncias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('denuncias', function (Blueprint $table) {
            $table->dropColumn('consumidor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('denuncias', function (Blueprint $table) {
            $table->integer('consumidor_id')->unsigned();
        });
    }
}
