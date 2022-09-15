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
        Schema::create('text_indices', function (Blueprint $table) {
            $table->id();
            $table->text('propos_desc');
            $table->text('propos_quand');
            $table->text('propos_pourquoi');
            $table->text('propos_fait');
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
        Schema::dropIfExists('text_indices');
    }
};
