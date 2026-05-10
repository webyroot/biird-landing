<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'section_anchor_id',
        'badge_text',
        'main_title',
        'description',
        'primary_cta_text',
        'primary_cta_link',
        'secondary_cta_text',
        'secondary_cta_link',
        'avatar_image',
        'member_count_text',
        'member_subtitle',
        'location_text',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
