<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $name = fake()->name();
        return [
            'category_id' => fake()->numberBetween(1, 10),
            'user_id' => fake()->numberBetween(1, 10),
            'name' => $name,
            'slug' => Str::slug($name),
            'body' => fake()->paragraph(),
            'status' => fake()->boolean(),
            'tags' => Str::slug(fake()->address(), ', '),
            'seo_keywords' => Str::slug(fake()->address(), ', '),
            'seo_descripton' => fake()->text(),
            'view_count' => fake()->numberBetween(1, 100),
            'like_count' => fake()->numberBetween(1, 100),
            'read_time' => fake()->numberBetween(1, 3),
            'publish_date' => fake()->dateTime()
        ];
    }
}
