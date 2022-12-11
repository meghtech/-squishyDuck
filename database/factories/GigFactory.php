<?php

namespace Database\Factories;

use App\Models\Gig;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class GigFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gig::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      
            $name = $this->faker->name;
            $slug = Str::slug($name);
            return [
                'title' => $name,
                'slug' => $slug,
                'description' => $this->faker->sentence,
                'image' => $this->faker->image('public/storage/upload/Gig',400,300, null, false),
                'category_id' => $this->faker->numberBetween(1,10),
                'seller_id' => 1,
                'price' => $this->faker->numberBetween(100,500)
            ];
    }
}
