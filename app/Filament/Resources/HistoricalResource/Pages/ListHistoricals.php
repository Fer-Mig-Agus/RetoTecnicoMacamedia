<?php

namespace App\Filament\Resources\HistoricalResource\Pages;

use App\Filament\Resources\HistoricalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHistoricals extends ListRecords
{
    protected static string $resource = HistoricalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
