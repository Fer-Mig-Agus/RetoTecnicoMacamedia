<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Degree;
use App\Models\Student;
use App\Models\Subject;
use Faker\Provider\ar_EG\Text;
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
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('dni')
                    ->required(),
                TextInput::make('phone')
                    ->required(),
                TextInput::make('bundle')
                    ->required(),

                Select::make('degree_id')
                    ->label('Degree')
                    ->options(Degree::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                Select::make('active')
                    ->label('Active')
                    ->options([
                        true => 'Active',
                        false => 'Inactive'
                    ])
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
                TextColumn::make('last_name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('dni')
                    ->searchable(),
                TextColumn::make('bundle')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('status'),
                TextColumn::make('degree.name'),

            ])
            ->filters([
                SelectFilter::make('Active')
                    ->options([
                        true => 'Active',
                        false => 'Inactive',
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                ExportBulkAction::make('List of Students'),
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
