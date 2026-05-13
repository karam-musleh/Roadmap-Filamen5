<?php

namespace App\Filament\Resources\Features\Pages;

use App\Filament\Resources\Features\FeatureResource;
use App\Models\Feature;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Gate;

use function Filament\authorize;

class ListFeatures extends ListRecords
{
    protected static string $resource = FeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('test')->action(function () {
                dd('test');
            })->label('Test Action')
            ->authorize(Gate::allows('test', Feature::class)),
            CreateAction::make()->label('New Feature'),
        ];
    }
}
