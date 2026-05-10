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
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section_anchor_id')->default('hero');
            $table->string('badge_text')->default('A WILAN LEADERSHIP PLATFORM');
            $table->text('main_title')->nullable();
            $table->text('description')->nullable();
            $table->string('primary_cta_text')->default('Begin Your Journey');
            $table->string('primary_cta_link')->default('#signup');
            $table->string('secondary_cta_text')->default('Talk to Norah');
            $table->string('secondary_cta_link')->default('#norah');
            $table->string('avatar_image')->nullable();
            $table->string('member_count_text')->nullable();
            $table->string('member_subtitle')->nullable();
            $table->string('location_text')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
