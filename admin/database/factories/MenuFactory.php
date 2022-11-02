<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $file = File::factory()->create();

        return [
            'name' => $this->faker->words(3, true),
            'file_id' => $file->id,
            'category_id' => $this->faker->numberBetween(1, 500),
            'price' => $this->faker->randomNumber( 4, true),
            'duration' => $this->faker->randomNumber( 4, true),
            'status' => $this->faker->randomElement(array_keys(Config('spec.menu.status'))),
            'description' => $this->faker->paragraph(),
        ];
    }
}
