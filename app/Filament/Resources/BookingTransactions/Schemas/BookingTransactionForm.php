<?php

namespace App\Filament\Resources\BookingTransactions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BookingTransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('phone_number')
                    ->tel()
                    ->required(),
                TextInput::make('booking_trx_id')
                    ->required()
                    ->default(fn () => 'TRX' . mt_rand(10000, 99999))
                    ->readOnly(),
                Select::make('office_space_id')
                    ->relationship('officeSpace', 'name')
                    ->required(),
                TextInput::make('total_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('duration')
                    ->required()
                    ->numeric(),
                DatePicker::make('started_at')
                    ->required(),
                DatePicker::make('ended_at')
                    ->required(),
                Toggle::make('is_paid'),
            ]);
    }
}
