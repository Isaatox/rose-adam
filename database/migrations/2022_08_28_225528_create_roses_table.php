<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('marque');
            $table->string('denomination');
            $table->string('edition');
            $table->string('type');
            $table->string('gamme');
            $table->string('forme');
            $table->string('couleur');
            $table->string('largeur_diam');
            $table->string('nb_petales');
            $table->string('parfum');
            $table->string('port');
            $table->string('vegetation');
            $table->string('hauteur_cm');
            $table->string('largeur_cm');
            $table->string('feuillage');
            $table->string('maladies');
            $table->string('inflorescence');
            $table->string('floraison');
            $table->text('recompenses');
            $table->string('roseimg');
            $table->string('prix');
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
        Schema::dropIfExists('roses');
    }
};
