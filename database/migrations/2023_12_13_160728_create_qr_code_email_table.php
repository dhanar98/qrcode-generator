<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qr_code_email', function (Blueprint $table) {
            $table->id();
            $table->foreignId('qr_code_id')->constrained('qr_code');
            $table->string('email', 100);
            $table->string('subject', 200)->nullable();
            $table->text('message')->nullable();
            $table->text('qr_code_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qr_code_email');
    }
};
