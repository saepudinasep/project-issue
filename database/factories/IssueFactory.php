<?php

namespace Database\Factories;

use App\Models\CatagoryIssue;
use App\Models\DetailRegion;
use App\Models\Issue;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Issue>
 */
class IssueFactory extends Factory
{
    protected $model = Issue::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'detail_region_id' => DetailRegion::factory(),
            'user_id' => User::factory(),
            'tanggal' => $this->faker->date(),
            'jam' => $this->faker->time(),
            'category_issue_id' => CatagoryIssue::factory(),
            'no' => $this->faker->string(),
            'details_issue' => $this->faker->paragraph(),
            'solusi' => $this->faker->paragraph(),
        ];
    }
}
