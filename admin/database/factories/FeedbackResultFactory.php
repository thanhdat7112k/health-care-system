<?php

namespace Database\Factories;

use App\Models\FeedbackResult;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackResultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FeedbackResult::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $schedule = Schedule::factory()->create();
        
        return [
            'schedule_feedback_id' => $this->faker->numberBetween(1, 500),
            'user_id' => $this->faker->numberBetween(1, 20),
            'facility_user_id' => $schedule->facility_user_id,
            'name' => $this->faker->words(3, true),
            'feedback' => $this->faker->paragraph(),
        ];
    }
}
