<?php

namespace App\Filament\Resources\CartProductResource\Pages;

use App\Filament\Resources\CartProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCartProduct extends EditRecord
{
    protected static string $resource = CartProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
