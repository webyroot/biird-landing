<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeatureSection extends Model
{
    protected $fillable = [
        'section_anchor_id',
        'badge_text',
        'headline',
        'subtext',
        'features',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'is_active' => 'boolean',
    ];
}
