<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContaReceberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('conta_receber', function ($table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('categoria_id');
            $table->boolean('recebido')->default(false);
            $table->date('data_recebimento');
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
        Schema::drop('conta_receber');
    }
}
