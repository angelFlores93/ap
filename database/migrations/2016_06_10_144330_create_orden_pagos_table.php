<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenPagos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('folio');
            $table->enum('tipo',['Certificación', 'Constancia', 'Ambos']);
            $table->enum('status', ['Pagado', 'No Pagado']);
            $table->integer('numTramites');
            $table->integer('resueltoPor');
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
        Schema::drop('ordenPagos');
    }
}
