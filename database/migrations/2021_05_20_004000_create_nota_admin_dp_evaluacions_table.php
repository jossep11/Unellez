<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaAdminDpEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_admin_dp_evaluacions', function (Blueprint $table) {
            $table->id();
            $table->text('fortaleza');
            $table->text('oportunidad');
            $table->text('debilidad');
            $table->text('amenaza');

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
        Schema::dropIfExists('nota_admin_dp_evaluacions');
    }
}
