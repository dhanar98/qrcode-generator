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
        Schema::create('app_user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email', 40)->unique();
            $table->text('profile_dp')->nullable();
            $table->string('country_code', 20)->nullable();
            $table->string('phone_number', 30)->unique()->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->uuid('api_key')->unique();
            $table->uuid('api_password')->unique();
            $table->text('address')->nullable();
            $table->boolean('is_joined')->default(false);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_restricted')->default(false);
            $table->string('app_code')->unique();
            $table->string('referal_code')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_user');
    }
};
