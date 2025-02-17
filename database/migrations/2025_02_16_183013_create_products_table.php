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
            $table->string('title', 200);
            $table->string('slug', 400)->unique();
            $table->integer('quantity');
            $table->longText('description')->nullable();
            $table->boolean('published')->default(false);
            $table->boolean('in_stock')->default(false);
            $table->decimal('price', 10, 2);
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('brand_id')->nullable()->constrained();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->softDeletes();
            $table->foreignId('deleted_by')->nullable()->constrained('users');
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
