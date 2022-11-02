<?php

namespace Database\Factories;

use App\Models\ScheduleMenu;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleMenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ScheduleMenu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'schedule_id' => $this->faker->numberBetween(1, 200),
            'menu_id' => $this->faker->numberBetween(1, 500),
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->numberBetween(1, 100) * 1000,
        ];
    }
}
