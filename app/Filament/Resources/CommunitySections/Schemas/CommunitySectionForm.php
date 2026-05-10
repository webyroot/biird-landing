<?php

namespace App\Filament\Resources\CommunitySections\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CommunitySectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()
                    ->columns(2)
                    ->schema([
                        Section::make('Section Configuration')
                            ->schema([
                                TextInput::make('section_anchor_id')
                                    ->label('Section Anchor ID')
                                    ->helperText('Use this ID in navigation menu links (e.g., #community)')
                                    ->required()
                                    ->default('community'),
                                Toggle::make('is_active')
                                    ->label('Active')
                                    ->helperText('Show this section on the landing page')
                                    ->default(true),
                            ])
                            ->columns(2),

                        Section::make('Community Content')
                            ->schema([
                                TextInput::make('badge_text')
                                    ->label('Badge Text')
                                    ->placeholder('e.g., WILAN COMMUNITY')
                                    ->required(),
                                Textarea::make('headline')
                                    ->label('Headline')
                                    ->placeholder('e.g., Your village is here. Your circle is waiting.')
                                    ->rows(2)
                                    ->columnSpanFull(),
                                Textarea::make('subtext')
                                    ->label('Subtext')
                                    ->placeholder('Enter the community section description')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ]),
                    ]),

                Section::make('Community Features')
                    ->description('Add up to 4 feature cards with Iconify icons')
                    ->schema([
                        Repeater::make('features')
                            ->label('')
                            ->maxItems(4)
                            ->addActionLabel('Add Feature')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                            ->schema([
                                TextInput::make('icon')
                                    ->label('Icon (Iconify)')
                                    ->placeholder('e.g., solar:chat-round-line-bold')
                                    ->helperText('Enter Iconify icon name. Find icons at iconify.design')
                                    ->prefixIcon('heroicon-m-swatch')
                                    ->required(),
                                TextInput::make('title')
                                    ->label('Title')
                                    ->placeholder('e.g., Direct Messaging')
                                    ->required(),
                                Textarea::make('description')
                                    ->label('Description')
                                    ->placeholder('Enter feature description...')
                                    ->rows(2)
                                    ->required(),
                            ])
                            ->columns(2)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
