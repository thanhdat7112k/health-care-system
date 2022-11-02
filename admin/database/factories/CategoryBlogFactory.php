<?php

namespace Database\Factories;

use App\Models\CategoryBlog;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryBlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryBlog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(1, true),
            'status' => STATUS_ACTIVE,
        ];
    }
}
