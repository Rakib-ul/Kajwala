<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('workers', function (Blueprint $table) {
            $table->string('profile_image')->nullable()->after('skill');
            $table->decimal('hourly_rate', 10, 2)->nullable()->after('profile_image');
            $table->integer('experience_years')->nullable()->after('hourly_rate');
            $table->text('address')->nullable()->after('experience_years');
        });
    }

    public function down(): void {
        Schema::table('workers', function (Blueprint $table) {
            $table->dropColumn(['profile_image', 'hourly_rate', 'experience_years', 'address']);
        });
    }
};
