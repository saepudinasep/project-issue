<?php

namespace Database\Factories;

use App\Models\Cabang;
use App\Models\DetailRegion;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailRegion>
 */
class DetailRegionFactory extends Factory
{
    protected $model = DetailRegion::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'region_id' => Region::factory(),
            'cabang_id' => Cabang::factory(),
        ];
    }
}
