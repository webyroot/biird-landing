<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoSection extends Model
{
    protected $fillable = [
        'section_anchor_id',
        'badge_text',
        'headline',
        'description',
        'videos',
        'norah_avatar',
        'is_active',
    ];

    protected $casts = [
        'videos' => 'array',
        'is_active' => 'boolean',
    ];
}
