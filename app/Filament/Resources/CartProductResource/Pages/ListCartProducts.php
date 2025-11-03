<?php

namespace App\Filament\Resources\CartProductResource\Pages;

use App\Filament\Resources\CartProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCartProducts extends ListRecords
{
    protected static string $resource = CartProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
