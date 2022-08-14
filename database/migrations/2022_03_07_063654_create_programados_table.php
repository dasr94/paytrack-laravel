<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->double('monto', 8, 2);
            $table->char('estado');
            $table->text('descripcion')->nullable();
            $table->date('fecha_vto')->nullable();
            $table->string('categoria')->nullable();
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
        Schema::dropIfExists('programados');
    }
}
