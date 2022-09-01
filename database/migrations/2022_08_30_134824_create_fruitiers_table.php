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
        Schema::create('fruitiers', function (Blueprint $table) {
            $table->id();
            $table->string('variete');
            $table->text('description');
            $table->text('recompenses');
            $table->string('fruitierimg');
            $table->string('prix');
            $table->string('rendement');
            $table->string('sucre');
            $table->string('acidite');
            $table->string('parfum');
            $table->string('hauteur_cm');
            $table->string('largeur_cm');
            $table->string('maladies');
            $table->string('couleur');
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
        Schema::dropIfExists('fruitiers');
    }
};
