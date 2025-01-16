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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_abnormal')->default(false); // Tracks abnormal behavior
            $table->integer('failed_login_attempts')->default(0); // Failed login counter
            $table->string('last_ip_address')->nullable(); // Tracks last known IP
            $table->timestamp('last_activity_at')->nullable(); // Tracks last activity time
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['is_abnormal', 'failed_login_attempts', 'last_ip_address', 'last_activity_at']);
        });
    }
};
