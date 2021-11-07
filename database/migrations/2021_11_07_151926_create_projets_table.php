<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->index()->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->string('status');
            $table->string('residence');
            $table->string('nature');
            $table->string('adresse');
            //$table->unsignedBigInteger('departement_id')->index()->references('id')->on('departements')->onDelete('cascade');
            $table->boolean('know_parcelle');
            $table->string('parcelle');
            $table->string('code_postal');
            $table->boolean('pret');
            $table->boolean('lotissement');
            $table->boolean('copropriété');
            $table->boolean('cu');
            $table->string('reseaux');
            $table->boolean('know_assainissement');
            $table->string('assainissement');
            $table->boolean('know_filiere');
            $table->string('eau_pluie');
            $table->string('precision_eau_pluie');
            $table->boolean('batiments_terrain');
            //$table->unsignedBigInteger('batiment_terrain')->index()->references('id')->on('batiment_terrain')->onDelete('cascade');
            $table->boolean('know_stationnements');
            //$table->unsignedBigInteger('batiment_terrain')->index()->references('id')->on('batiment_terrain')->onDelete('cascade');
            $table->string('photos');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
