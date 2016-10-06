<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContaPagarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('conta_pagar', function ($table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('categoria_id');
            $table->date('data_vencimento');
            $table->boolean('pago')->default(false);
            $table->date('data_pagamento');
            $table->longText('descricao');
            $table->boolean('excluido')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('conta_pagar');
    }
}
