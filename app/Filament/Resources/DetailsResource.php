<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailsResource\Pages;
use App\Filament\Resources\DetailsResource\RelationManagers;
use App\Models\Details;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailsResource extends Resource
{
    protected static ?string $model = Details::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('program_id')
                ->relationship('program', 'name')
                ->required(),
            Forms\Components\TextInput::make('registration_fee')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('monthly_fee')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('student_ebook_fee')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('tshirt_fee')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('meeting_frequency')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('program.name')->label('Program'),
                Tables\Columns\TextColumn::make('registration_fee')->label('Registration Fee')->money('IDR'),
                Tables\Columns\TextColumn::make('monthly_fee')->label('Monthly Fee')->money('IDR'),
                Tables\Columns\TextColumn::make('student_ebook_fee')->label('Student eBook Fee')->money('IDR'),
                Tables\Columns\TextColumn::make('tshirt_fee')->label('T-shirt Fee')->money('IDR'),
                Tables\Columns\TextColumn::make('meeting_frequency')->label('Meeting Frequency'),
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
            'index' => Pages\ListDetails::route('/'),
            'create' => Pages\CreateDetails::route('/create'),
            'edit' => Pages\EditDetails::route('/{record}/edit'),
        ];
    }
}
