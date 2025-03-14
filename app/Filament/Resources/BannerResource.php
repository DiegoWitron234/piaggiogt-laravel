<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Campo de nombre del banner
                TextInput::make('titulo')
                    ->label('Titulo')
                    ->required()
                    ->maxLength(255),
                // Campo para la imagen
                FileUpload::make('imagen')
                    ->label('Imagen')
                    ->image()
                    ->disk('banners_public')  // Disco nuevo
                    ->directory('') // Se guardará en public/banners
                    ->maxSize(5024),   // Tamaño máximo en kilobytes
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Mostrar el nombre del banner
                Tables\Columns\TextColumn::make('titulo')
                    ->label('Titulo')
                    ->sortable()
                    ->searchable(),
                // Mostrar una miniatura de la imagen
                Tables\Columns\ImageColumn::make('imagen')
                    ->label('Imagen')
                    ->disk('banners_public'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit'   => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
