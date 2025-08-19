<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('services', function (Blueprint $table) {
            $table->string('image')->nullable()->after('category'); // service image
            $table->integer('duration')->nullable()->after('price'); // duration in minutes
            $table->string('location')->nullable()->after('duration'); // service location
            $table->unsignedBigInteger('created_by')->nullable()->after('location'); // reference to worker/admin

            // If you want to link created_by to workers table
            // $table->foreign('created_by')->references('id')->on('workers')->onDelete('set null');
        });
    }

    public function down(): void {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['image', 'duration', 'location', 'created_by']);
        });
    }
};
