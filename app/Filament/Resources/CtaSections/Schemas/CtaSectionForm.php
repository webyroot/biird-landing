<?php

namespace App\Filament\Resources\CtaSections\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CtaSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('section_anchor_id')
                    ->required()
                    ->default('join'),
                Textarea::make('headline')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('tags'),
                TextInput::make('cta_text'),
                TextInput::make('cta_link')
                    ->required()
                    ->default('#signup'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
