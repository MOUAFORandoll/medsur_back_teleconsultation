<?php

namespace Database\Factories;

use App\Models\Ordonnance;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrdonnanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ordonnance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => Str::uuid()->toString(),
            'date' =>  Carbon::today()->subDays(rand(0, 365)),
            'description' => $this->faker->text
        ];
    }
}
