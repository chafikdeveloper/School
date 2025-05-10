<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeanceResource\Pages;
use App\Filament\Resources\SeanceResource\RelationManagers;
use App\Models\Seance;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SeanceResource extends Resource
{
    protected static ?string $model = Seance::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

    protected static ?string $navigationLabel = 'Sessions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('course_id')->relationship('course', 'title')->label('Course')->required()->searchable()->preload()->columnSpanFull(),
                TextInput::make('students')->integer()->required(),
                TextInput::make('study_days')->placeholder('Sun - Thu')->required(),
                DatePicker::make('start_date')->required(),
                DatePicker::make('end_date')->required(),
                TimePicker::make('start_time')->seconds(false)->required(),
                TimePicker::make('end_time')->seconds(false)->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('course.title')->weight('bold'),
                TextColumn::make('start_date')->date(),
                TextColumn::make('study_days'),
                TextColumn::make('end_date')->date()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('start_time')->time(),
                TextColumn::make('end_time')->time()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListSeances::route('/'),
            'create' => Pages\CreateSeance::route('/create'),
            'edit' => Pages\EditSeance::route('/{record}/edit'),
        ];
    }
}
