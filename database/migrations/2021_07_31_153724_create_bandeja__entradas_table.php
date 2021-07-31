<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandejaEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });


        Schema::create('bandeja__entradas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Operacion')->nullable();
            $table->unsignedBigInteger('ID_Fortaleza')->nullable();
            $table->unsignedBigInteger('ID_Amenaza')->nullable();
            $table->unsignedBigInteger('ID_Debilidad')->nullable();
            $table->unsignedBigInteger('ID_Oportunidades')->nullable();

            $table->foreign('ID_Operacion')->references('id')->nullable()->on('operacions');
            $table->foreign('ID_Fortaleza')->references('id')->nullable()->on('fortalezas');
            $table->foreign('ID_Amenaza')->references('id')->nullable()->on('amenazas');
            $table->foreign('ID_Debilidad')->references('id')->nullable()->on('debilidades');
            $table->foreign('ID_Oportunidades')->references('id')->nullable()->on('oportunidades');


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
        Schema::dropIfExists('operacions');
        Schema::dropIfExists('bandeja__entradas');
    }
}
