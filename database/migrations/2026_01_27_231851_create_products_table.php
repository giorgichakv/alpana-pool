<<?php

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

            $table->string('name');                   // პროდუქტის სახელი
            $table->text('description')->nullable();  // აღწერა
            $table->decimal('price', 8, 2);            // ფასი
            $table->integer('stock')->default(0);      // მარაგი
            $table->string('image')->nullable();       // სურათი

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

