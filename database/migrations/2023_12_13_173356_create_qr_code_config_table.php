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
        Schema::create('qr_code_config', function (Blueprint $table) {
            $table->id();
            $table->foreignId('qr_code_id')->constrained('qr_code')->onDelete('cascade');
            $table->text('frame_image')->nullable();
            $table->string('error_correction', 10)->nullable();
            $table->string('merge', 500)->nullable();
            $table->string('color', 40)->nullable();
            $table->string('background_color', 40)->nullable();
            $table->string('gradient_from_color', 40)->nullable();
            $table->string('gradient_to_color', 40)->nullable();
            $table->string('gradient_type', 30)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_code_config');
    }
};
