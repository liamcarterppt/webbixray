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
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('referrer_id'); // User who referred
            $table->unsignedBigInteger('referred_id')->nullable(); // Referred user
            $table->string('referral_code')->unique(); // Unique referral code
            $table->decimal('reward_amount', 10, 2)->default(0); // Reward amount for referrer
            $table->boolean('is_rewarded')->default(false); // Track if reward has been paid
            $table->timestamps();

            $table->foreign('referrer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('referred_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referrals');
    }
};
