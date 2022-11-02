<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

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
            'category_product_id' => $this->faker->numberBetween(1, 500),
            'price' => $this->faker->randomNumber( 4, true),
            'description' => $this->faker->paragraph(),
            'quantity' => $this->faker->randomNumber( 1, true),
            'status' => $this->faker->randomElement(array_keys(Config('spec.product.status'))),
        ];
    }
}
