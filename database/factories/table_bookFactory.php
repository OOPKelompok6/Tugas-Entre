<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class table_bookFactory extends Factory
{

    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        include base_path('dataDump/dataDump.php');

        return [
            'bookName' => fake()->randomElement($bestSellingBooks),
            'bookAuthor' => fake()->randomElement($authors),
            'ISBN' => fake()->randomElement($isbnList),
            'publisher' => fake()->randomElement($publishers),
            'type' => fake()->randomElement(['Softcover', 'Hardcover']),
            'publishDate' => fake()->dateTimeBetween('1945-01-01', '2023-12-31'),
            'description' => fake()->text(200),
            'price' => fake()->numberBetween(50, 250)
        ];
    }
}
