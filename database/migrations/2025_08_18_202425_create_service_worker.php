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
        Schema::create('service_worker', function (Blueprint $table) {
            $table->foreignId('service_id')->constrained();
            $table->foreignId('worker_id')->constrained();
            $table->primary(['service_id', 'worker_id']);
            $table->decimal('price', 10, 2);
            $table->text('specialization')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_worker');
    }
};
