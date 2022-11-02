<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $file = File::factory()->create();

        return [
            'admin_id' => 1,
            'title' => $this->faker->words(3, true),
            'thumbnail' => $file->id,
            'content' => $this->faker->paragraphs(3, true),
            'status' => $this->faker->randomElement(array_keys(Config('spec.blog.status'))),
        ];
    }
}
