<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubjectResource\Pages;
use App\Filament\Resources\SubjectResource\RelationManagers;
use App\Models\Degree;
use App\Models\Subject;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubjectResource extends Resource
{
    protected static ?string $model = Subject::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                Select::make('duration')
                    ->label('Duration')
                    ->options([
                        'Quadrimestral' => 'Quadrimestral',
                        'Annual' => 'Annual',
                    ])
                    ->searchable(),

                TextInput::make('class_hours')
                    ->numeric(),

                Select::make('degree_id')
                    ->label('Degree')
                    ->options(Degree::all()->pluck('name', 'id'))
                    ->searchable(),



            ]);
    }

    public static function table(Table $table): Table
    {
        
        
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('duration'),
                TextColumn::make('class_hours'),
               TextColumn::make('degree_id'),
               
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSubjects::route('/'),
            'create' => Pages\CreateSubject::route('/create'),
            'edit' => Pages\EditSubject::route('/{record}/edit'),
        ];
    }
}
