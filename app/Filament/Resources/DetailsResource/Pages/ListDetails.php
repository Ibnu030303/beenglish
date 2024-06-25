<?php

namespace App\Filament\Resources\DetailsResource\Pages;

use App\Filament\Resources\DetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetails extends ListRecords
{
    protected static string $resource = DetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
