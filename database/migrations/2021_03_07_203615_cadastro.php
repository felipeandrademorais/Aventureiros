<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cadastro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->text('genero');
            $table->text('endereco');
            $table->text('numero');
            $table->text('bairro');
            $table->text('cidade');
            $table->text('cep');
            $table->text('estado');
            $table->text('referencia');
            $table->text('rg');
            $table->text('expedidor');
            $table->text('cpf');
            $table->text('certidao_nascimento');
            $table->text('religiao');
            $table->text('tamanho_camiseta');
            $table->text('nome_responsavel');
            $table->text('cpf_responsavel');
            $table->text('rg_responsavel');
            $table->text('telefone_responsavel');
            $table->text('email_responsavel');
            $table->text('responsabilidade');
            $table->text('parentesco_responsavel');
            $table->timestamp('cadastro_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastro');
    }
}
