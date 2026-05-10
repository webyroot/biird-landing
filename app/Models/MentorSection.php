<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MentorSection extends Model
{
    protected $fillable = [
        'section_anchor_id',
        'badge_text',
        'headline',
        'description',
        'primary_cta_text',
        'secondary_cta_text',
        'stats',
        'mentors',
        'is_active',
    ];

    protected $casts = [
        'stats' => 'array',
        'mentors' => 'array',
        'is_active' => 'boolean',
    ];
}
