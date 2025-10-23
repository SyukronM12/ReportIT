<?php

namespace App\Filament\Resources\Locations\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema([
            Forms\Components\TextInput::make('name')
                ->label('Nama Lokasi')
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('description')
                ->label('Deskripsi')
                ->maxLength(65535)
                ->columnSpanFull(),
            Forms\Components\TextInput::make('address')
                ->label('Alamat')
                ->required()
                ->maxLength(255),
            Forms\Components\Toggle::make('status')
                ->label('Status')
                ->required(),
        ]);
    }
}
