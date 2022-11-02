<?php

namespace Database\Factories;

use App\Models\ScheduleFeedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFeedbackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ScheduleFeedback::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'schedule_id' => $this->faker->numberBetween(1, 200),
            'facility_id' => 1,
            'level' => $this->faker->randomElement(array_keys(config('spec.schedule_feedbacks.level'))),
            'reply' => $this->faker->randomElement([0,1]),
        ];
    }
}
