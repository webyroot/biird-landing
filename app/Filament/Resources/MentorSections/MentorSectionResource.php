<?php

namespace App\Filament\Resources\MentorSections;

use App\Filament\Resources\MentorSections\Pages\CreateMentorSection;
use App\Filament\Resources\MentorSections\Pages\EditMentorSection;
use App\Filament\Resources\MentorSections\Pages\ListMentorSections;
use App\Filament\Resources\MentorSections\Schemas\MentorSectionForm;
use App\Filament\Resources\MentorSections\Tables\MentorSectionsTable;
use App\Models\MentorSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MentorSectionResource extends Resource
{
    protected static ?string $model = MentorSection::class;


    public static function form(Schema $schema): Schema
    {
        return MentorSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MentorSectionsTable::configure($table);
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
            'index' => ListMentorSections::route('/'),
            'create' => CreateMentorSection::route('/create'),
            'edit' => EditMentorSection::route('/{record}/edit'),
        ];
    }
}
