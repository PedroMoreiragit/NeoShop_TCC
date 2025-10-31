<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->json('technical_info')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock');
            $table->string('image_path')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
