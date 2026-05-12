<?php

namespace App\Filament\Resources\OfficeSpaces\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class OfficeSpaceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state ?? ''))),
                TextInput::make('slug')
                    ->required()
                    ->readOnly(),
                FileUpload::make('thumbnail')
                    ->image()
                    ->required(),
                Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                Select::make('city_id')
                    ->relationship('city', 'name')
                    ->required(),
                Toggle::make('is_open'),
                Toggle::make('is_full_booked'),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('duration')
                    ->required()
                    ->numeric(),
            ]);
    }
}
