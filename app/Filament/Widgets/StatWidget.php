<?php

namespace App\Filament\Widgets;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatWidget extends BaseWidget
{
    protected static ?string $pollingInterval = '30m';

    protected ?string $heading = 'Analytics';

    protected ?string $description = 'An overview of some analytics.';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Students', Student::count()),
            Stat::make('Total Courses', Course::count()),
            Stat::make('Total Instructors', Instructor::count())
        ];
    }
}
