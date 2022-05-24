<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BerendezesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return[
            'id'=>null,
            'uzem_id' => rand(1,2),
            'tipus' => Str::random(6),
            'allapot' => rand(0,1),
        ];
    }
}
