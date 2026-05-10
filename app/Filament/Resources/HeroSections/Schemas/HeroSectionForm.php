<?php

namespace App\Filament\Resources\HeroSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Section Configuration')
                    ->schema([
                        TextInput::make('section_anchor_id')
                            ->label('Section Anchor ID')
                            ->helperText('Use this ID in navigation menu links (e.g., #hero)')
                            ->required()
                            ->default('hero'),
                        Toggle::make('is_active')
                            ->label('Active')
                            ->helperText('Show this section on the landing page')
                            ->default(true),
                    ])
                    ->columns(2),

                Section::make('Hero Content')
                    ->schema([
                        TextInput::make('badge_text')
                            ->label('Badge Text')
                            ->placeholder('e.g., A WILAN LEADERSHIP PLATFORM')
                            ->required(),
                        Textarea::make('main_title')
                            ->label('Main Title')
                            ->placeholder('e.g., Where African Women rise, lead & thrive')
                            ->rows(2)
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->label('Description')
                            ->placeholder('Enter the hero section description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Section::make('Call to Action Buttons')
                    ->schema([
                        TextInput::make('primary_cta_text')
                            ->label('Primary CTA Text')
                            ->placeholder('e.g., Begin Your Journey')
                            ->required(),
                        TextInput::make('primary_cta_link')
                            ->label('Primary CTA Link')
                            ->placeholder('e.g., #signup')
                            ->required(),
                        TextInput::make('secondary_cta_text')
                            ->label('Secondary CTA Text')
                            ->placeholder('e.g., Talk to Norah')
                            ->required(),
                        TextInput::make('secondary_cta_link')
                            ->label('Secondary CTA Link')
                            ->placeholder('e.g., #norah')
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('Social Proof')
                    ->schema([
                        FileUpload::make('avatar_image')
                            ->label('Avatar Image')
                            ->helperText('Upload the community avatar image')
                            ->image()
                            ->directory('hero'),
                        TextInput::make('member_count_text')
                            ->label('Member Count Text')
                            ->placeholder('e.g., 10,000+'),
                        TextInput::make('member_subtitle')
                            ->label('Member Subtitle')
                            ->placeholder('e.g., women growing together'),
                        TextInput::make('location_text')
                            ->label('Location Text')
                            ->placeholder('e.g., Across 40+ African countries & the diaspora'),
                    ])
                    ->columns(2),
            ]);
    }
}
