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
            $table->unsignedBigInteger('dessinateur_id')->index()->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->unsignedBigInteger('devis_id')->index()->references('id')->on('devis')->onDelete('cascade')->nullable();
            $table->string('status');
            $table->string('brief')->nullable();
            $table->string('nature')->nullable();
            $table->string('adresse');
            $table->string('références_adatrales')->nullable();

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
