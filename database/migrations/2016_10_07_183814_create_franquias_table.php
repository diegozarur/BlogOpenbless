<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franquias', function($table)
                {
                    $table->increments('id');
                    $table->string('title',256);
                    $table->string('endereco',256);
                    $table->string('imagem',256);
                    $table->string('contato',256);
                    $table->string('creci',256);
                    $table->string('email',256);
                    $table->longText('content');                    
                    $table->boolean('public');
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
            Schema::drop('franquias');
    }
}
