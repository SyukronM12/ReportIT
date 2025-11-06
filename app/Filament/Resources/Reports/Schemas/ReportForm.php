<?php

namespace App\Filament\Resources\Reports\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class ReportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('title')
                ->label('Title')
                ->required(),

            Forms\Components\Textarea::make('description')
                ->label('Description')
                ->nullable(),

            Forms\Components\Select::make('category_id')
                ->label('Category')
                ->relationship('category', 'name')
                ->required(),

            Forms\Components\Select::make('location_id')
                ->label('Location')
                ->relationship('location', 'name')
                ->required(),

            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'pending' => 'Pending',
                    'in_progress' => 'In Progress',
                    'resolved' => 'Resolved',
                ])
                ->default('pending'),

            Forms\Components\Select::make('reported_by')
                ->label('Reported By')
                ->relationship('reporter', 'name')
                ->required(),

            Forms\Components\FileUpload::make('image')
                ->label('Image')
                ->directory('reports')
                ->image()
                ->nullable(),
        ]);
    }
}
