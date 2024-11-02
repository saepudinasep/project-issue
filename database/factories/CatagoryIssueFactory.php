<?php

namespace Database\Factories;

use App\Models\CatagoryIssue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CatagoryIssue>
 */
class CatagoryIssueFactory extends Factory
{
    protected $model = CatagoryIssue::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'details' => $this->faker->sentence(),
        ];
    }
}
