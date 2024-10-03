<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicios', function (Blueprint $table) {
            $table->bigInteger('id_exercicio');
            $table->foreignId('atividade')->constrained('atividades', 'num');
            $table->foreignId('fk_alt_correta')->constrained('alternativas', 'id_alt');
            $table->string('pergunta',500);
            $table->string('imagemAtv',30);
            $table->integer('alt_1');
            $table->integer('alt_2');
            $table->integer('alt_3');
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
        Schema::dropIfExists('exercicios');
    }
};
