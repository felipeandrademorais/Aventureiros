<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Saude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saude', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cadastro')->unsigned();
            $table->text('doencas');
            $table->text('cardiaco');
            $table->text('cardiaco_text')->nullable(true);
            $table->text('alergia_medicamento');
            $table->text('alergia_medicamento_text')->nullable(true);
            $table->text('lactose');
            $table->text('lactose_text')->nullable(true);
            $table->text('deficiencia');
            $table->text('deficiencia_text')->nullable(true);
            $table->text('transfusao');
            $table->text('alergia_pele');
            $table->text('alergia_pele_text')->nullable(true);
            $table->text('desmaio');
            $table->text('desmaio_text')->nullable(true);
            $table->text('psicologicos');
            $table->text('psicologicos_text')->nullable(true);
            $table->text('alergia');
            $table->text('alergia_text')->nullable(true);
            $table->text('ferimento');
            $table->text('fratura');
            $table->text('fratura_text')->nullable(true);
            $table->text('cirurgia');
            $table->text('cirurgia_text')->nullable(true);
            $table->text('internacao_text')->nullable(true);
            $table->text('sangue');
            $table->text('fator_rh');
            $table->text('responsabilidade');
            $table->timestamp('saude_at')->useCurrent();

            $table->foreign('id_cadastro')->references('id')->on('cadastro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saude');
    }
}
