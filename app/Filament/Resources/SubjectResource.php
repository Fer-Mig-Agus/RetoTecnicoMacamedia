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
use Filament\Tables\Filters\SelectFilter;
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
                TextInput::make('name')
                ->required(),
                Select::make('duration')
                    ->label('Duration')
                    ->options([
                        'Quadrimestral' => 'Quadrimestral',
                        'Annual' => 'Annual',
                    ])
                    ->searchable()
                    ->required(),

                TextInput::make('class_hours')
                    ->numeric()
                    ->required(),

                Select::make('degree_id')
                    ->label('Degree')
                    ->options(Degree::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),



            ]);
    }

    public static function table(Table $table): Table
    {
        
        
        return $table
            ->columns([
                TextColumn::make('name')
                ->sortable()
                    ->searchable(),
                TextColumn::make('duration'),
                TextColumn::make('class_hours')
                ->sortable(),
               TextColumn::make('degree.name'),
               
                
            ])
            ->filters([

                SelectFilter::make('duration')
                    ->options([
                        'Quadrimestral' => 'Quadrimestral',
                        'Annual' => 'Annual',
                    ]),
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
