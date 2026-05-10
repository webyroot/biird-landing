<?php

namespace App\Filament\Resources\CommunitySections;

use App\Filament\Resources\CommunitySections\Pages\CreateCommunitySection;
use App\Filament\Resources\CommunitySections\Pages\EditCommunitySection;
use App\Filament\Resources\CommunitySections\Pages\ListCommunitySections;
use App\Filament\Resources\CommunitySections\Schemas\CommunitySectionForm;
use App\Filament\Resources\CommunitySections\Tables\CommunitySectionsTable;
use App\Models\CommunitySection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CommunitySectionResource extends Resource
{
    protected static ?string $model = CommunitySection::class;

    public static function form(Schema $schema): Schema
    {
        return CommunitySectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CommunitySectionsTable::configure($table);
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
            'index' => ListCommunitySections::route('/'),
            'create' => CreateCommunitySection::route('/create'),
            'edit' => EditCommunitySection::route('/{record}/edit'),
        ];
    }
}
