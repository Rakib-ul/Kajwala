<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('workers', function (Blueprint $table) {
            $table->string('address')->nullable()->after('phone');
            $table->string('profile_image')->nullable()->after('address');
        });
    }
    public function down(): void {
        Schema::table('workers', function (Blueprint $table) {
            $table->dropColumn(['address', 'profile_image']);
        });
    }
};
