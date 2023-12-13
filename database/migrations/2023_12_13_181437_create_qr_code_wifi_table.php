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
        Schema::create('qr_code_wifi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('qr_code_id')->constrained('qr_code');
            $table->string('encryption');
            $table->string('ssid');
            $table->string('password');
            $table->boolean('hidden')->default(false);
            $table->text('qr_code_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_code_wifi');
    }
};
