<?php

namespace App\Filament\Resources\DetailsResource\Pages;

use App\Filament\Resources\DetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetails extends EditRecord
{
    protected static string $resource = DetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
