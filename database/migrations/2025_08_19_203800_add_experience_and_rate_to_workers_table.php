<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('workers', function (Blueprint $table) {
            $table->integer('experience_years')->nullable()->after('profile_image');
            $table->decimal('hourly_rate', 8, 2)->nullable()->after('experience_years');
        });
    }
    
    public function down(): void {
        Schema::table('workers', function (Blueprint $table) {
            $table->dropColumn(['experience_years', 'hourly_rate']);
        });
    }
};
