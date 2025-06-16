<?php

namespace App\Filament\Resources;

use App\Models\Category;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Components\{TextInput, Textarea, FileUpload};
use Filament\Tables\Columns\{TextColumn, ImageColumn};
use Filament\Tables\Actions\Action;
use App\Filament\Resources\CategoryResource\Pages;
use Filament\Tables\Actions\EditAction;


class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('nama_paket')->required(),
        ]);
    }
public static function table(Tables\Table $table): Tables\Table
{
    return $table->columns([
        TextColumn::make('nama_paket')->label('Nama Paket'),
    ])->actions([
        EditAction::make()->label('Ubah'), // GANTI LABEL EDIT DI SINI
    ]);
}



    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
