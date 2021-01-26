<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture', function (Blueprint $table) {
            $table->id();

            $table->timestamp('created_at');

            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')
                ->references('id')
                ->on('client')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->unsignedBigInteger('id_stock');
            $table->foreign('id_stock')
                ->references('id')
                ->on('stock')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('nb');

            $table->float('price');

            $table->string('path_to_facture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facture');
    }
}
