<?php

namespace App\Filament\Resources\FeatureSections;

use App\Filament\Resources\FeatureSections\Pages\CreateFeatureSection;
use App\Filament\Resources\FeatureSections\Pages\EditFeatureSection;
use App\Filament\Resources\FeatureSections\Pages\ListFeatureSections;
use App\Filament\Resources\FeatureSections\Schemas\FeatureSectionForm;
use App\Filament\Resources\FeatureSections\Tables\FeatureSectionsTable;
use App\Models\FeatureSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FeatureSectionResource extends Resource
{
    protected static ?string $model = FeatureSection::class;


    public static function form(Schema $schema): Schema
    {
        return FeatureSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FeatureSectionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFeatureSections::route('/'),
            'create' => CreateFeatureSection::route('/create'),
            'edit' => EditFeatureSection::route('/{record}/edit'),
        ];
    }
}
