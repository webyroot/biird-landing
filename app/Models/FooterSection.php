<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterSection extends Model
{
    protected $fillable = [
        'badge_text',
        'logo_image',
        'description',
        'social_links',
        'platform_links',
        'company_links',
        'support_links',
        'copyright_text',
        'is_active',
    ];

    protected $casts = [
        'social_links' => 'array',
        'platform_links' => 'array',
        'company_links' => 'array',
        'support_links' => 'array',
        'is_active' => 'boolean',
    ];
}
