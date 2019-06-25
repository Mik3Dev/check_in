<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGSItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_s_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('general_service_id');
            $table->enum('name', ['Automatico central', 'Termo/Calefont', 'Desague', 'Llave de paso', 'Cocina', 'Baños', 'Gas', 'Lavadora', 'otros']);
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
        Schema::dropIfExists('g_s_items');
    }
}
