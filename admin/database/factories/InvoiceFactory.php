<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $schedule = Schedule::factory()->create();

        return [
            'user_id' => $schedule->user_id,
            'facility_user_id' => $schedule->facility_user_id,
            'facility_id' => $schedule->facility_id,
            'schedule_id' => $schedule->id,
            'user_name' => User::findOrFail($schedule->user_id)->name,
            'schedule_datetime' => $schedule->schedule_datetime,
            'serve_done_datetime' => $schedule->serve_done_datetime,
            'price' => $schedule->price,
        ];
    }
}
