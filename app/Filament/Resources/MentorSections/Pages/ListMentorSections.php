<?php

namespace App\Filament\Resources\MentorSections\Pages;

use App\Filament\Resources\MentorSections\MentorSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMentorSections extends ListRecords
{
    protected static string $resource = MentorSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
