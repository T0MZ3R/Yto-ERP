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
            // Type date
            $table->string('CreatedAt');
            // Type clé étrangère
            $table->string('Id_client');
            // Type clé étrangère
            $table->string('Id_Stock');
            // Type petit int pas negatif tu connais sisi le sang
            $table->string('Nb');
            // Type petit float tu connais
            $table->string('Price');
            $table->string('PathToFacture');
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
