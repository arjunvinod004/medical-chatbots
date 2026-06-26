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
         Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email', 191)->unique();
        $table->string('phone_number', 20)->nullable();
        $table->boolean('is_active')->default(true);
        $table->string('priority')->nullable(); // VARCHAR(255)
        $table->timestamps();
    });

     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
