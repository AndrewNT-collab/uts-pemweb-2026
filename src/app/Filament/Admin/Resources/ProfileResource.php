<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Profile';

    protected static ?string $modelLabel = 'Profile';

    protected static ?string $pluralModelLabel = 'Profiles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('nim')
                    ->label('NIM')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('major')
                    ->label('Program Studi')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('university')
                    ->label('Universitas')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('about')
                    ->label('About Me')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('photo')
                    ->label('Foto Profile')
                    ->placeholder('profile.jpg')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),

                Tables\Columns\TextColumn::make('nim')
                    ->label('NIM'),

                Tables\Columns\TextColumn::make('major')
                    ->label('Program Studi'),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diupdate')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}