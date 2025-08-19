<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('password')->nullable();
            $table->string('skill')->nullable();             // e.g., "Electrician, Plumber"
            $table->string('service')->nullable();            // Primary service
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_available')->default(true);
            $table->string('address')->nullable();
            $table->string('profile_image')->nullable();
            $table->integer('experience_years')->nullable();
            $table->decimal('hourly_rate', 8, 2)->nullable();
            $table->decimal('rating', 3, 1)->default(5.0);
            $table->string('documents')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('workers');
    }
};
