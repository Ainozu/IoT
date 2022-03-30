<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SzenzorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'=>null,
            'berendezes_id' => rand(1,5),
            'tipus' => Str::random(10),
            'fogyasztas' => rand(100,25000),
            'allapot' => rand(0,1),
        ];
    }
}
