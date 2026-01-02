<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->word(),
            'slug'=>$this->faker->unique()->slug(),
            'old_price'=>$this->faker->numberBetween(1000,5000),
            'new_price'=>$this->faker->numberBetween(500,4000),
            'description'=>$this->faker->paragraph(),
            'excerpt'=>$this->faker->sentence(),
            'category_id'=>$this->faker->numberBetween(1,10),
            'brand'=>$this->faker->word(),
            'condition'=>$this->faker->randomElement(['new','used']),
            'model_name'=>$this->faker->word(),
            'bike_type'=>$this->faker->randomElement(['sport','road','mountain', 'road']),
            'launch_year'=>$this->faker->year(),
            'no_of_cylinder'=>$this->faker->numberBetween(1,4),
            'engine_cc'=>$this->faker->numberBetween(70,1000),
            'max_meter'=>$this->faker->numberBetween(50,300),
            'max_torque'=>$this->faker->numberBetween(50,150),
            'no_of_gear'=>$this->faker->numberBetween(4,6),
            'tank_capacity'=>$this->faker->numberBetween(5,20),
            'milage'=>$this->faker->numberBetween(30,60),
            'weight'=>$this->faker->numberBetween(100,300),
            'break_type'=>$this->faker->randomElement(['disc','drum']),
            'wheel_type'=>$this->faker->randomElement(['alloy','spoke']),
            'tyre_type'=>$this->faker->randomElement(['tubeless','tube']),
            'headlight'=>$this->faker->randomElement(['led','bulb']),
            'colors'=>$this->faker->randomElement(['red','blue','green','black']),

        ];
    }
}

