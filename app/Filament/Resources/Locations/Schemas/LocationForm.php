<?php

namespace App\Filament\Resources\Locations\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('name')
                ->label('Name')
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('description')
                ->label('Description')
                ->maxLength(65535)
                ->columnSpanFull(),
            Forms\Components\TextInput::make('address')
                ->label('Address')
                ->required()
                ->maxLength(255),
            Forms\Components\Toggle::make('status')
                ->label('Status')
                ->required(),
        ]);
    }
}
