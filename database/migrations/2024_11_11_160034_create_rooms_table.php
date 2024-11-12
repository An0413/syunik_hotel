<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('seq');
            $table->string('image');
            $table->string('info_am');
            $table->string('info_ru');
            $table->string('info_en');
            $table->string('childs');
            $table->string('star');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('stage');
            $table->integer('number');
            $table->integer('type_id');
            $table->integer('surface');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
