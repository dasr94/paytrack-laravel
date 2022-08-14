<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateBolsasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolsas', function (Blueprint $table) {
            $table->id();
            $table->double('saldo', 8, 2);
            $table->string('nombre');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
        DB::table('bolsas')
            ->insert([
                'nombre' => 'Sueldo Base',
                'saldo' => '0',
                'user_id' => '1'
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bolsas');
    }
}
