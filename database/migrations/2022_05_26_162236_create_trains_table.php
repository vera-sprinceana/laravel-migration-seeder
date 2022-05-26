<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->char('azienda', 50);
            $table->char('stazione_di_partenza', 50);
            $table->char('stazione_di_arrivo', 50);
            $table->dateTimeTz('orario_di_partenza');
            $table->dateTimeTz('orario_di_arrivo');
            $table->string('codice_treno', 50);
            $table->integer('numero_carrozze');
            $table->char('in_orario', 5);
            $table->char('cancellato', 10);
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
        Schema::dropIfExists('trains');
    }
}
