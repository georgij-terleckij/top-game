<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'meta_title' => $this->faker->sentence(6),
            'meta_description' => $this->faker->sentence(10),
            'text' => $this->faker->text(1500),
            'img' => '1.jpeg',
            'published' => 1,
            'viewed' => $this->faker->numberBetween(100, 1000),
            'user_id' => 1, // Тот пользователь, которого мы засеяли вручную (admin Lifeliss)
            'game_id' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
