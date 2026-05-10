<?php

namespace App\Filament\Resources\MentorSections\Pages;

use App\Filament\Resources\MentorSections\MentorSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMentorSection extends EditRecord
{
    protected static string $resource = MentorSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
