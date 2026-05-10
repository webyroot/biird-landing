<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CtaSection extends Model
{
    protected $fillable = [
        'section_anchor_id',
        'headline',
        'description',
        'tags',
        'cta_text',
        'cta_link',
        'is_active',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_active' => 'boolean',
    ];
}
