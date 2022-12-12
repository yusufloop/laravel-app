<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [ //random data generate. using faker
            'title' => $this->faker->unique()->sentence(),// taknak sentence sama. so unique
            'excerpt' => $this->faker->realText($maxNBChars = 50),//realText accept parameter ,max number char hanya 50.
            'body' => $this->faker->text(),// kelaurkan text random
            'image_path' => $this->faker->imageUrl(640,480),//image url random pastu png . parameter width dan height
            'is_published' => 1,
            'min_to_read' => $this->faker->numberBetween(1,10)//provide range 1 to 10
        ];
    }
}
