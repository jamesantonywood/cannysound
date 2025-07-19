<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => str(fake()->sentence)->beforeLast('.')->title(),
            'excerpt' => str(fake()->sentence)->beforeLast('.')->title(),
            'body' => Collection::times(4, fn () => fake()->realText(600))->join(PHP_EOL . PHP_EOL),
        ];
    }
}
