<?php

namespace App\Filament\Resources\FeatureSections\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FeatureSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('section_anchor_id')
                    ->required()
                    ->default('features'),
                TextInput::make('badge_text')
                    ->required()
                    ->default('EVERYTHING YOU NEED TO LEAD'),
                Textarea::make('headline')
                    ->columnSpanFull(),
                Textarea::make('subtext')
                    ->columnSpanFull(),
                TextInput::make('features'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
