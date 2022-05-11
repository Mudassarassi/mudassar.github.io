<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quadres', function (Blueprint $table) {
            $table->id();
            $table->string('nomAutor')->nullable();
            $table->string('nom');
            $table->string('describe');
            $table->integer('idBotiga')->unsigned();
            $table->foreign('idBotiga')->references('id')->on('botigas')->onDelete("cascade");
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
        Schema::dropIfExists('quadres');
    }
}
