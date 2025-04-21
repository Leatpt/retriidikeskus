<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $eventTitles = [
            'Music Concert',
            'Art Exhibition',
            'Food Festival',
            'Tech Conference',
            'Sports Tournament',
            'Dance Show',
            'Charity Gala',
            'Workshop',
            'Theater Performance',
            'Comedy Night',
        ];

        return [
            'title' => fake()->randomElement($eventTitles),
            'category_id' => fake()->numberBetween(1, 6),
            'description' => fake()->paragraph(),
            'location' => 'Oru Mõis',
            'start_date' => fake()->dateTimeBetween(Carbon::now(), Carbon::now()->addYear())->format('Y-m-d'), // Date between now and one year
            'end_date' => fake()->dateTimeBetween(Carbon::now(), Carbon::now()->addYear())->format('Y-m-d'),
            'start_time' => fake()->time('H:i'),
            'user_id' => User::first()->id,
        ];
    }
}
