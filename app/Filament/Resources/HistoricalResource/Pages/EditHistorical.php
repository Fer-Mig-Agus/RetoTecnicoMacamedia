<?php

namespace App\Filament\Resources\HistoricalResource\Pages;

use App\Filament\Resources\HistoricalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistorical extends EditRecord
{
    protected static string $resource = HistoricalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
