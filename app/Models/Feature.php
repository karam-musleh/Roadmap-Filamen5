<?php

namespace App\Models;

use App\Enums\Feature\FeatureStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Override;

class Feature extends Model
{
    /** @use HasFactory<\Database\Factories\FeatureFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'type',
        'description',
        'effort_in_days',
        'priority',
        'cost',
        'target_delivery_date',
        'delivered_at',
    ];
    #[Override]
    protected function casts()
    {
        return [
            'status' => FeatureStatus::class,
        ];
    }

}
