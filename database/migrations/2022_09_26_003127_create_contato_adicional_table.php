<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoAdicionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_adicionals', function (Blueprint $table) {
            $table->id();
            $table->string('nome_adicionais')->nullable();
            $table->string('empresa_adicionais')->nullable();
            $table->string('cargo_adicionais')->nullable();
            $table->string('telefone_adicionais')->nullable();
            $table->string('tipo_telefone_adicionais')->nullable();
            $table->string('email_adicionais')->nullable();
            $table->string('tipo_email_adicionais')->nullable();

            $table->foreignId('fornecedores_id')->constrained('fornecedores');
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
        Schema::dropIfExists('contato_adicionals');
    }
};
