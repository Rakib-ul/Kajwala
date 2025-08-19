<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('icon')->nullable(); // e.g., ⚡ or class name from font-awesome
        $table->text('description');
        $table->string('slug')->unique(); // for URL
        $table->timestamps();
    });
}

};
