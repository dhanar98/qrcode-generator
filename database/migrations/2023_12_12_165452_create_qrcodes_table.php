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
        Schema::create('qr_code', function (Blueprint $table) {
            $table->id();
            $table->uuid('qr_code_key');
            $table->foreignId('user_id')->constrained('app_user');
            $table->unsignedInteger('size')->default(256);
            $table->string('style',30)->default('dot');
            $table->string('eye',30)->default('circle');
            $table->unsignedInteger('margin')->default(1);
            $table->string('image_type',20)->default('png'); 
            $table->timestamp('creation_date')->useCurrent();
            $table->date('expiry_date')->nullable();
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_code');
    }
};
