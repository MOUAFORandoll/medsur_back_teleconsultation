<?php

namespace Database\Factories;

use App\Models\Teleconsultation;
use App\Models\TypeTeleconsultation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeleconsultationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teleconsultation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patient_id' => random_int(20, 2000), 
            'creator' => random_int(100, 800), 
            //'type_teleconsultation_id' => TypeTeleconsultation::factory()->create(), 
            'date_heure' => Carbon::today()->subDays(rand(0, 365))
        ];
    }
}
