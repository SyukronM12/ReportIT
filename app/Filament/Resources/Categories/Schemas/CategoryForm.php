<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema([
            Forms\Components\TextInput::make('name')
                ->label('Nama Kategori')
                ->required()
                ->maxLength(100),

            Forms\Components\Textarea::make('description')
                ->label('Deskripsi')
                ->rows(3),
        ]);
    }
}
