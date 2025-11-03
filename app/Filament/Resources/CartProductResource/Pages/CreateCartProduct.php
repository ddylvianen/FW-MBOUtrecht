<?php

namespace App\Filament\Resources\CartProductResource\Pages;

use App\Filament\Resources\CartProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCartProduct extends CreateRecord
{
    protected static string $resource = CartProductResource::class;
}
