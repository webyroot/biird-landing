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
        Schema::create('mentor_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section_anchor_id')->default('mentors');
            $table->string('badge_text')->default('MENTOR MATCHING');
            $table->text('headline')->nullable();
            $table->text('description')->nullable();
            $table->string('primary_cta_text')->default('Find My Mentor');
            $table->string('secondary_cta_text')->default('Become a Mentor');
            $table->json('stats')->nullable(); // Store stats as JSON
            $table->json('mentors')->nullable(); // Store mentor cards as JSON
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentor_sections');
    }
};
