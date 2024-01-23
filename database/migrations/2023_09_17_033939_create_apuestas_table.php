<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApuestasTable extends Migration
{
    public function up()
    {
        Schema::create('apuestas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user'); // Manteniendo 'id_user' como 'integer'
            $table->foreign('id_user')->references('id')->on('users');
            // Agrega otros campos necesarios para tu tabla aquí
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apuestas');
    }
}
