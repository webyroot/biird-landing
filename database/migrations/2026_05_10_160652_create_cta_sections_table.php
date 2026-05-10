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
        Schema::create('cta_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section_anchor_id')->default('join');
            $table->text('headline')->nullable();
            $table->text('description')->nullable();
            $table->json('tags')->nullable(); // Store tag pills as JSON
            $table->string('cta_text')->nullable();
            $table->string('cta_link')->default('#signup');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cta_sections');
    }
};
