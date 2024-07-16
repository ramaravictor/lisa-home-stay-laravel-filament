<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use App\Models\Rental;
use App\Models\Room;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';

    protected static ?string $navigationGroup = 'System Management';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('customer_name')->required()->maxLength(255),
                        Select::make('booking_type')
                            ->options([
                                'room' => 'Room',
                                'rental' => 'Rental',
                            ])
                            ->reactive()
                            ->required(),
                        Select::make('item_id')
                            ->label('Item')
                            ->options(function (callable $get) {
                                if ($get('booking_type') === 'room') {
                                    return Room::all()->pluck('name', 'id');
                                } elseif ($get('booking_type') === 'rental') {
                                    return Rental::all()->pluck('name', 'id');
                                }

                                return [];
                            })
                            ->required(),
                        DatePicker::make('start_date')->required(),
                        DatePicker::make('end_date')->required(),
                        Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'confirmed' => 'Confirmed',
                                'cancelled' => 'Cancelled',
                            ])
                            ->default('pending'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_name')->sortable()->searchable(),
                TextColumn::make('booking_type')->sortable()->searchable(),
                TextColumn::make('item_id')
                    ->label('Item')
                    ->formatStateUsing(function ($state, $record) {
                        if ($record->booking_type === 'room') {
                            return Room::find($state)->name ?? 'Unknown';
                        } elseif ($record->booking_type === 'rental') {
                            return Rental::find($state)->name ?? 'Unknown';
                        }

                        return 'Unknown';
                    }),
                TextColumn::make('start_date')->sortable(),
                TextColumn::make('end_date')->sortable(),
                TextColumn::make('status')->sortable(),
                TextColumn::make('created_at')->label('Created')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
