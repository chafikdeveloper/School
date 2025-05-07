<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationGroup = "Course Management";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')->required()->columnSpanFull(),
                    MarkdownEditor::make('description')->required()->columnSpanFull(),
                    Select::make('category_id')->relationship('category', 'name')->required()->columnSpan(1),
                    Select::make('instructor_id')->relationship('instructor', 'name')->required()->searchable()->preload()->columnSpan(1),
                ])->columnSpan(2)->columns(2),
                Section::make()->schema([
                    FileUpload::make('image'),
                    TextInput::make('price')->numeric()->required(),
                    Toggle::make('available')->default(false),
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->columns([
                TextColumn::make('title')->searchable()->sortable()->weight('bold'),
                TextColumn::make('instructor.name')->sortable(),
                TextColumn::make('category.name')->sortable()->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Web Dev' => 'blue',
                    'App Dev' => 'orange',
                    'Design' => 'green',
                    'Marketing' => 'red',
                    'Robotic' => 'robotic',
                    "Electronic" => 'purple'
                }),
                TextColumn::make('price')->money()->sortable(),
                ToggleColumn::make('available')->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category_id')->relationship('category', 'name'),
                SelectFilter::make('instructor_id')->relationship('instructor', 'name')->searchable()->preload(),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
