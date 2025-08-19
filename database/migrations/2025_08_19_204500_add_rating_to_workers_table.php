<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('workers', function (Blueprint $table) {
            $table->decimal('rating', 3, 1)->default(5.0)->after('hourly_rate');
        });
    }
    
    public function down(): void {
        Schema::table('workers', function (Blueprint $table) {
            $table->dropColumn('rating');
        });
    }
};
