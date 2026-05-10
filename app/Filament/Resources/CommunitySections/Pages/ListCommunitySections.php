<?php

namespace App\Filament\Resources\CommunitySections\Pages;

use App\Filament\Resources\CommunitySections\CommunitySectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCommunitySections extends ListRecords
{
    protected static string $resource = CommunitySectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
