<?php

namespace App\Filament\Resources\MentorSections\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MentorSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('section_anchor_id')
                    ->required()
                    ->default('mentors'),
                TextInput::make('badge_text')
                    ->required()
                    ->default('MENTOR MATCHING'),
                Textarea::make('headline')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('primary_cta_text')
                    ->required()
                    ->default('Find My Mentor'),
                TextInput::make('secondary_cta_text')
                    ->required()
                    ->default('Become a Mentor'),
                TextInput::make('stats'),
                TextInput::make('mentors'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
