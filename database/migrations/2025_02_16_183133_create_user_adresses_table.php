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
        Schema::create('user_adresses', function (Blueprint $table) {
            $table->id();
            $table->string('type', 45);
            $table->string('address');
            $table->string('city');
            $table->string('state')->nullable();
            $table->string('zipcode', 20);
            $table->boolean('is_main')->default(true);
            $table->string('country_code', 3);
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_adresses');
    }
};
