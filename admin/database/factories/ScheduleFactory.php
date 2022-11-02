<?php

namespace Database\Factories;

use App\Models\Facility;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $datetime = $this->faker->dateTimeBetween('-15 months', '-1 month')->format('Y-m-d')
            . ' ' . $this->faker->randomElement(config('spec.schedule.time'));
        $donedatetime = $this->faker->dateTimeBetween('-18 months', '-1 month')->format('Y-m-d')
            . ' ' . $this->faker->randomElement(config('spec.schedule.time'));

        return [
            'user_id' => User::all()->random()->id,
            'facility_user_id' => 1,
            'facility_id' => Facility::all()->random()->id,
            'schedule_datetime' => $datetime,
            'serve_done_datetime' => $donedatetime,
            'price' => $this->faker->numberBetween(1, 100) * 1000,
            'status' => $this->faker->randomElement(array_keys(config('spec.schedule.status'))),
        ];
    }
}
