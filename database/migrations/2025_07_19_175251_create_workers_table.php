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
            $table->string('skill')->nullable();             // e.g., "Electrician, Plumber"
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('workers');
    }
};
