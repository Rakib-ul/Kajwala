<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        // The role field is now added in the base users table migration
        // No additional fields needed
    }
    public function down(): void {
        // No columns to drop
    }
};
