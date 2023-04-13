<?php

namespace Database\Factories;

use App\Models\Conditionnement;
use App\Models\Medicament;
use App\Models\UnitePresentation;
use App\Models\VoieAdministration;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MedicamentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medicament::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => Str::uuid()->toString(),
            'unite_presentation_id' => UnitePresentation::inRandomOrder()->limit(1)->first()->id,
            'voie_administration_id' => VoieAdministration::inRandomOrder()->limit(1)->first()->id,
            'conditionnement_id'  => Conditionnement::inRandomOrder()->limit(1)->first()->id,
            'nom_commerciale' => $this->faker->text,
            'code' => $this->faker->text
        ];
    }
}
