<?php

namespace App\Filament\Resources\HeroSections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('section_anchor_id')
                    ->searchable(),
                TextColumn::make('badge_text')
                    ->searchable(),
                TextColumn::make('primary_cta_text')
                    ->searchable(),
                TextColumn::make('primary_cta_link')
                    ->searchable(),
                TextColumn::make('secondary_cta_text')
                    ->searchable(),
                TextColumn::make('secondary_cta_link')
                    ->searchable(),
                ImageColumn::make('avatar_image'),
                TextColumn::make('member_count_text')
                    ->searchable(),
                TextColumn::make('member_subtitle')
                    ->searchable(),
                TextColumn::make('location_text')
                    ->searchable(),
                IconColumn::make('is_active')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
