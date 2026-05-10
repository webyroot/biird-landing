<?php

namespace App\Filament\Resources\FooterSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FooterSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('badge_text')
                    ->required()
                    ->default('A WILAN INSTITUTE PLATFORM'),
                FileUpload::make('logo_image')
                    ->image(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('social_links'),
                TextInput::make('platform_links'),
                TextInput::make('company_links'),
                TextInput::make('support_links'),
                TextInput::make('copyright_text'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
