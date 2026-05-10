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
        Schema::create('video_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section_anchor_id')->default('videos');
            $table->string('badge_text')->default('YOUR LEADERSHIP JOURNEY, GUIDED.');
            $table->text('headline')->nullable();
            $table->text('description')->nullable();
            $table->json('videos')->nullable(); // Store video embeds as JSON
            $table->string('norah_avatar')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_sections');
    }
};
