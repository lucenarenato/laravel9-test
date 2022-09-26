<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoPrincipalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_principals', function (Blueprint $table) {
            $table->id();
            $table->string('telefone');
            $table->string('tipo_telefone');
            $table->string('email')->nullable();
            $table->string('tipo_email')->nullable();
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
        Schema::dropIfExists('contato_principals');
    }
};
