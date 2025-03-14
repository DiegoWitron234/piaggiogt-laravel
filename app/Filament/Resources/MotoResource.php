<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MotoResource\Pages;
use App\Filament\Resources\MotoResource\RelationManagers;
use App\Models\Moto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MotoResource extends Resource
{
    protected static ?string $model = Moto::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck'; // Puedes elegir otro icono

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('modelo')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('anio')
                    ->numeric()
                    ->required(),
                Forms\Components\Textarea::make('descripcion')
                    ->required(),
                Forms\Components\TextInput::make('precio')
                    ->numeric()
                    ->required(),
                Forms\Components\FileUpload::make('imagen')
                    ->image()
                    ->directory('') // public/motos
                    ->disk('motos_public')
                    ->maxSize(5024), // tamaño máximo en kilobytes
                Forms\Components\TextInput::make('motor')
                    ->maxLength(50)
                    ->required(),
                Forms\Components\TextInput::make('velocidad')
                    ->maxLength(50)
                    ->required(),
                Forms\Components\TextInput::make('manual')
                    ->maxLength(50)
                    ->required(),
                Forms\Components\TextInput::make('pasajeros')
                    ->maxLength(50)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('modelo')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('anio')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('precio')
                    ->sortable(),
                Tables\Columns\TextColumn::make('manual')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                // Puedes agregar filtros, por ejemplo, por 'anio' o 'manual'
            ])
            ->defaultSort('anio', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMotos::route('/'),
            'create' => Pages\CreateMoto::route('/create'),
            'edit' => Pages\EditMoto::route('/{record}/edit'),
        ];
    }
}
