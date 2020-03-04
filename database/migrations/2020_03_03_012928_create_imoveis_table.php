<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nome');
            $table->string('descricao');
            $table->string('tipo');
            $table->string('negocio');
            $table->bigInteger('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidade');
            $table->string('bairro');
            $table->string('cep');
            $table->string('rua');
            $table->string('complemento');
            $table->string('valor');
            $table->string('tamanho');
            $table->string('dormitorios');
            $table->string('garagens');
            $table->string('banheiros');
            $table->string('foto_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imoveis');
    }
}
