<?php

namespace Database\Factories;

use App\Models\Camp;
use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Camp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'activities' => '1, 2',
            'address' => $this->faker->address(),
            'bonfire' => 1,
            'business_hours' => '10時〜18時',
            'institution_type' => '2, 3',
            'is_card_payment' => $this->faker->boolean(50),
            'is_charter' => $this->faker->boolean(50),
            'is_cooking_room' => $this->faker->boolean(50),
            'is_cottage' => $this->faker->boolean(50),
            'is_fireworks' => $this->faker->boolean(50),
            'is_parking' => $this->faker->boolean(50),
            'is_pet' => $this->faker->boolean(50),
            'is_power_supply' => $this->faker->boolean(50),
            'is_restroom' => $this->faker->boolean(50),
            'is_shower' => $this->faker->boolean(50),
            'is_store' => $this->faker->boolean(50),
            'is_vending_machine' => $this->faker->boolean(50),
            'is_water_place' => $this->faker->boolean(50),
            'is_wifi' => $this->faker->boolean(50),
            'name' => $this->faker->word(),
            'note' => $this->faker->sentence(),
            'prefecture_id' => $this->faker->numberBetween(1, 47),
            'price' => '1000円〜',
            'regular_closing_day' => '月曜',
            'rental_goods' => '3, 4, 5',
            'reserve_type' => '4, 5',
            'site_url' => $this->faker->url(),
            'stay_type' => 1,
        ];
    }
}
