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
        Schema::create('footer_sections', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text')->default('A WILAN INSTITUTE PLATFORM');
            $table->string('logo_image')->nullable();
            $table->text('description')->nullable();
            $table->json('social_links')->nullable(); // Store social links as JSON
            $table->json('platform_links')->nullable();
            $table->json('company_links')->nullable();
            $table->json('support_links')->nullable();
            $table->string('copyright_text')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_sections');
    }
};
