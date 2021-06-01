<?php

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFortalezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fortalezas', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
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
        Schema::dropIfExists('fortalezas');
    }
}
