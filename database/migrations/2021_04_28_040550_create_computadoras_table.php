<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->string('sistema_operativo');
            $table->string('usuario');
            $table->string('clave');
            $table->string('nombre_equipo');
            $table->string('nombre_red');
            $table->string('direccion_ip');
            $table->string('observaciones')->nullable();
            $table->string('memoria_ram');
            $table->string('procesador');
            $table->string('disco_duro');
            $table->string('codigo_acceso');
            $table->bigInteger('cliente_id')->unsigned();
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('ubicacion_id')->unsigned();
            $table->foreign('ubicacion_id')
                ->references('id')
                ->on('ubicaciones')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('computadoras');
    }
}
