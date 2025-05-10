<?php

namespace App\Filament\Widgets;

use App\Models\Course;
use App\Models\User;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class CategoryWidget extends ChartWidget
{
  protected static ?string $heading = 'Course Category';

  protected function getData(): array
  {
    $data = Trend::model(
      Course::class
    )
      ->between(
        start: now()->subYear(),
        end: now()
      )
      ->perMonth()
      ->count();

    return [
      'datasets' => [
        [
          'label' => 'Course Category',
          'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
        ],
      ],
      'labels' => $data->map(fn(TrendValue $value) => $value->date),
    ];
  }

  protected function getType(): string
  {
    return 'line';
  }
}
