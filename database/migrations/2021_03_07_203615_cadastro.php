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
            $table->text('nome_pai');
            $table->text('telefone_pai');
            $table->text('email_pai');
            $table->text('nome_mae');
            $table->text('telefone_mae');
            $table->text('email_mae');
            $table->text('responsabilidade');
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
