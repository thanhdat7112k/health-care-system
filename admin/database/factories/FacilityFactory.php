<?php

namespace Database\Factories;

use App\Models\Facility;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacilityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Facility::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->unique()->randomNumber(9, true),
            'prefecture' =>$this->faker->randomElement(Config('spec.prefecture')),
            'address' => $this->faker->streetAddress(),
            'status' => $this->faker->randomElement(array_keys(Config('spec.facility.status'))),
        ];
    }
}
