<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclarantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declarants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nom')->nullable();
            $table->text('prenom')->nullable();
            $table->text('date_naissance')->nullable();
            $table->text('lieu_naissance')->nullable();
            $table->text('adresse')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('declarants');
    }
}
