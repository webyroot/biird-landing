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
        Schema::create('community_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section_anchor_id')->default('community');
            $table->string('badge_text')->default('WILAN COMMUNITY');
            $table->text('headline')->nullable();
            $table->text('subtext')->nullable();
            $table->json('features')->nullable(); // Store features as JSON
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('community_sections');
    }
};
