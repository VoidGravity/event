<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'start_date' => $this->faker->dateTime(),
            'location' => $this->faker->address(),
            'capacity' => $this->faker->randomElement(['4-10', '10-99', '99-1000', '1000-9999', '9999-100k', '100k+']),
            'user_id' => function () {

                return User::factory()->create()->id;

            },
            'category_id' => function () {
                return Category::factory()->create()->id;
            },
            
            
        
        ];
    }
}
