<?php

namespace Modules\UserAdministration\Filament\Resources;

use Modules\UserAdministration\Filament\Resources\UserResource\Pages;
use Modules\UserAdministration\Filament\Resources\UserResource\RelationManagers;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\UserAdministration\Entities\User;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('User Name')
                    ->maxLength(255),
                TextInput::make('email')
                    ->required()
                    ->label('Email')
                    ->email(),
                TextInput::make('password')
                    ->required()
                    ->label('Password')
                    ->password(),
                Select::make('role')
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('roles.name')
                    ->label('Roles')
                    ->formatStateUsing(function ($state) {
                        if (is_string($state)) {
                            $state = [$state];
                        }
                        return collect($state)->implode(', ');
                    }),
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
            'index' => \Modules\UserAdministration\Filament\Resources\UserResource\Pages\ListUsers::route('/'),
            'create' => \Modules\UserAdministration\Filament\Resources\UserResource\Pages\CreateUser::route('/create'),
            'edit' => \Modules\UserAdministration\Filament\Resources\UserResource\Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
