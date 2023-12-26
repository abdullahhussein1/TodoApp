<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('user_settings', function (Blueprint $table) {
        $table->id();
        $table->string('theme')->default('light');
        $table->string('sort_by')->default('dateEdited');
        $table->timestampsTz();
        $table->foreignId('user_id')->constrained('user_accounts')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_settings');
    }
};
