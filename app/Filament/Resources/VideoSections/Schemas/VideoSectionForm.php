<?php

namespace App\Filament\Resources\VideoSections\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VideoSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('section_anchor_id')
                    ->required()
                    ->default('videos'),
                TextInput::make('badge_text')
                    ->required()
                    ->default('YOUR LEADERSHIP JOURNEY, GUIDED.'),
                Textarea::make('headline')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('videos'),
                TextInput::make('norah_avatar'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
