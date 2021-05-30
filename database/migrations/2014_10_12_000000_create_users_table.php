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
            $table->id();
            $table->string('per_cedula')->nullable();
            $table->string('per_nacionalidad')->nullable();
            $table->string('name');
            $table->string('per_nombres')->nullable();
            $table->string('per_apellidos')->nullable();
            $table->bigInteger('per_sexo')->nullable();
            $table->date('per_fecnac')->nullable();
            $table->date('per_fecadmpub')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable()->nullable();
            $table->string('password');
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
    }
}
