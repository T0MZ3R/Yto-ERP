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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();

            $table->timestamp('created_at');

            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')
                ->references('id')
                ->on('clients')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->unsignedBigInteger('id_stock');
            $table->foreign('id_stock')
                ->references('id')
                ->on('stocks')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('nb');

            $table->float('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
