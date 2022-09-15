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
            $table->string('fruitierimg');
            $table->text('recompenses');
            $table->string('categorie');
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
        Schema::dropIfExists('fruitiers');
    }
};
