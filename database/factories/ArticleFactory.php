<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->realText(500),
            'description' => $this->faker->text(150),
            'title' => $this->faker->text(50),
            'picture' => $this->faker->imageUrl(1000, 750, 'city'),
            'author_id' => 1
        ];
    }
}
