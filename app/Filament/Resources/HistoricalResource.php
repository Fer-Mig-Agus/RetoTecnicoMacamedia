<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoricalResource\Pages;
use App\Filament\Resources\HistoricalResource\RelationManagers;
use App\Models\Historical;
use App\Models\Status;
use App\Models\Student;
use App\Models\Subject;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
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

class HistoricalResource extends Resource
{
    protected static ?string $model = Historical::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('student_id')
                ->label('Student')
                ->options(Student::all()->pluck('student', 'id'))
                ->required()
                ->searchable(),
                
                Select::make('subject_id')
                    ->label('Subject')
                    ->options(Subject::all()->pluck('name', 'id'))
                    ->required()
                    ->searchable(),

                Select::make('status_id')
                    ->label('Status')
                    ->options(Status::all()->pluck('name', 'id'))
                    ->required()
                    ->searchable(),

                DatePicker::make('date')
                    ->label('Fecha de creacion')
                    ->required(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.student')
                ->sortable()
                ->searchable(),
                TextColumn::make('subject.name')
                ->sortable()
                ->searchable(),
                TextColumn::make('status.name')
                ->sortable()
                ->searchable(),
                TextColumn::make('date')
                ->date(),

            ])
            ->filters([
                SelectFilter::make('status')->relationship('status','name'),
                SelectFilter::make('subject')->relationship('subject','name'),

            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListHistoricals::route('/'),
            'create' => Pages\CreateHistorical::route('/create'),
            // 'edit' => Pages\EditHistorical::route('/{record}/edit'),
        ];
    }
}
