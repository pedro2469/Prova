<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nome')->unique();
            $table->string('cpf')->unique(); //Verificar validade do CPF
            $table->Date('dataNascimento');
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
        Schema::dropIfExists('pessoas');
    }
}
