<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('section_id');
            $table->enum('name', ['Ventanas', 'Puertas', 'Muros', 'Cielos', 'Pisos', 'Tapa Corrientes/Conexiones', 'Apagadores', 'Lamparas/Focos', 'Rieles', 'Zocalos', 'Otros']);
            $table->decimal('qty')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('items');
    }
}
