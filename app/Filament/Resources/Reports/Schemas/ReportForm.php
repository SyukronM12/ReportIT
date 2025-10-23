<?php

namespace App\Filament\Resources\Reports\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class ReportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema([
            Forms\Components\TextInput::make('title')
                ->label('Judul')
                ->required(),
            Forms\Components\Textarea::make('description')
                ->label('Deskripsi'),
            Forms\Components\Select::make('category_id')
                ->label('Kategori')
                ->relationship('category', 'name')
                ->required(),
            Forms\Components\Select::make('location_id')
                ->label('Lokasi')
                ->relationship('location', 'name')
                ->required(),
            Forms\Components\Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'in_progress' => 'In Progress',
                    'resolved' => 'Resolved',
                ]),
            Forms\Components\Select::make('reported_by')
                ->relationship('reporter', 'name')
                ->required(),
            Forms\Components\FileUpload::make('image')
                ->label('Gambar')
                ->directory('reports')
                ->image(),
        ]);
    }
}
