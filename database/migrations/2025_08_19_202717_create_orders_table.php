<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');                 // Customer name
            $table->string('email')->nullable();    // Optional
            $table->string('phone')->nullable();    // Optional
            $table->decimal('amount', 10, 2);       // Order amount
            $table->text('address')->nullable();    // Shipping or service address
            $table->enum('status', ['pending', 'paid', 'failed', 'cancelled'])->default('pending');
            $table->string('transaction_id')->nullable();
            $table->string('currency', 10)->default('BDT'); // Currency
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('orders');
    }
};
