<?php

namespace App\Filament\Resources\VideoSections;

use App\Filament\Resources\VideoSections\Pages\CreateVideoSection;
use App\Filament\Resources\VideoSections\Pages\EditVideoSection;
use App\Filament\Resources\VideoSections\Pages\ListVideoSections;
use App\Filament\Resources\VideoSections\Schemas\VideoSectionForm;
use App\Filament\Resources\VideoSections\Tables\VideoSectionsTable;
use App\Models\VideoSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VideoSectionResource extends Resource
{
    protected static ?string $model = VideoSection::class;


    public static function form(Schema $schema): Schema
    {
        return VideoSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VideoSectionsTable::configure($table);
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
            'index' => ListVideoSections::route('/'),
            'create' => CreateVideoSection::route('/create'),
            'edit' => EditVideoSection::route('/{record}/edit'),
        ];
    }
}
