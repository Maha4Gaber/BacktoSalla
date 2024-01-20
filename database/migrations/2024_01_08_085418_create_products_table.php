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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('decs');
            $table->integer('img');
            $table->integer('price');
            $table->integer('offer');
            $table->integer('star');
            $table->integer('quantity');
            $table->integer('soled');
            $table->longText('paragraph');
            $table->string('color');
            $table->string('wire');
            $table->string('brand');
            $table->string('model');
            $table->string('dimn');
            $table->integer('sim');
            $table->string('metal');
            $table->integer('weight');
            $table->foreignId('cat_id')->references('id')->on('categories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
