<?php

namespace App\Filament\Resources\CommunitySections\Pages;

use App\Filament\Resources\CommunitySections\CommunitySectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCommunitySection extends EditRecord
{
    protected static string $resource = CommunitySectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
