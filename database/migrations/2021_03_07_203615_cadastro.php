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
            $table->text('genero')->nullable(true);
            $table->text('endereco');
            $table->text('numero')->nullable(true);
            $table->text('bairro');
            $table->text('cidade');
            $table->text('cep')->nullable(true);
            $table->text('estado');
            $table->text('referencia')->nullable(true);
            $table->text('rg')->nullable(true);
            $table->text('expedidor')->nullable(true);
            $table->text('cpf')->nullable(true);
            $table->text('certidao_nascimento');
            $table->text('religiao')->nullable(true);
            $table->text('tamanho_camiseta')->nullable(true);
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
