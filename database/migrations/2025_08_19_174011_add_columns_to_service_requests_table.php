<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('service_requests', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->nullable()->after('notes'); // agreed price
            $table->string('address')->nullable()->after('price'); // service location address
            $table->enum('payment_status', ['pending', 'paid', 'failed', 'refunded'])->default('pending')->after('address');
            $table->enum('payment_method', ['cash', 'card', 'mobile'])->nullable()->after('payment_status');
            $table->dateTime('completed_at')->nullable()->after('scheduled_at');
            $table->dateTime('cancelled_at')->nullable()->after('completed_at');
        });
    }

    public function down(): void {
        Schema::table('service_requests', function (Blueprint $table) {
            $table->dropColumn(['price', 'address', 'payment_status', 'payment_method', 'completed_at', 'cancelled_at']);
        });
    }
};
