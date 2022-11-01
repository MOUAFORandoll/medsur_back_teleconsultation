<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Teleconsultation
 *
 * @property string $id
 * @property int $patient_id
 * @property int $creator
 * @property string $type_teleconsultation_id
 * @property string $date_heure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\TypeTeleconsultation|null $type_teleconsultation
 * @method static \Database\Factories\TeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDateHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereTypeTeleconsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withoutTrashed()
 * @mixin \Eloquent
 * @property string $description
 * @property string $date
 * @property string $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DossierAllergie[] $dossier_allergie
 * @property-read int|null $dossier_allergie_count
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allergie whereSlug($value)
 */
	class Allergie extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teleconsultation
 *
 * @property string $id
 * @property int $patient_id
 * @property int $creator
 * @property string $type_teleconsultation_id
 * @property string $date_heure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\TypeTeleconsultation|null $type_teleconsultation
 * @method static \Database\Factories\TeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDateHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereTypeTeleconsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withoutTrashed()
 * @mixin \Eloquent
 */
	class Anamnese extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teleconsultation
 *
 * @property string $id
 * @property int $patient_id
 * @property int $creator
 * @property string $type_teleconsultation_id
 * @property string $date_heure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\TypeTeleconsultation|null $type_teleconsultation
 * @method static \Database\Factories\TeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDateHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereTypeTeleconsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withoutTrashed()
 * @mixin \Eloquent
 */
	class Antecedent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teleconsultation
 *
 * @property string $id
 * @property int $patient_id
 * @property int $creator
 * @property string $type_teleconsultation_id
 * @property string $date_heure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\TypeTeleconsultation|null $type_teleconsultation
 * @method static \Database\Factories\TeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDateHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereTypeTeleconsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withoutTrashed()
 * @mixin \Eloquent
 * @property int $dossier_medical_id
 * @property int $allergie_id
 * @property-read \App\Models\Allergie|null $allergie
 * @method static \Illuminate\Database\Eloquent\Builder|DossierAllergie whereAllergieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DossierAllergie whereDossierMedicalId($value)
 */
	class DossierAllergie extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teleconsultation
 *
 * @property string $id
 * @property int $patient_id
 * @property int $creator
 * @property string $type_teleconsultation_id
 * @property string $date_heure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\TypeTeleconsultation|null $type_teleconsultation
 * @method static \Database\Factories\TeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDateHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereTypeTeleconsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withoutTrashed()
 * @mixin \Eloquent
 */
	class Etablissement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teleconsultation
 *
 * @property string $id
 * @property int $patient_id
 * @property int $creator
 * @property string $type_teleconsultation_id
 * @property string $date_heure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\TypeTeleconsultation|null $type_teleconsultation
 * @method static \Database\Factories\TeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDateHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereTypeTeleconsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withoutTrashed()
 * @mixin \Eloquent
 */
	class ExamenClinique extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teleconsultation
 *
 * @property string $id
 * @property int $patient_id
 * @property int $creator
 * @property string $type_teleconsultation_id
 * @property string $date_heure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\TypeTeleconsultation|null $type_teleconsultation
 * @method static \Database\Factories\TeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDateHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereTypeTeleconsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withoutTrashed()
 * @mixin \Eloquent
 */
	class ExamenComplementaire extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teleconsultation
 *
 * @property string $id
 * @property int $patient_id
 * @property int $creator
 * @property string $type_teleconsultation_id
 * @property string $date_heure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\TypeTeleconsultation|null $type_teleconsultation
 * @method static \Database\Factories\TeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDateHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereTypeTeleconsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withoutTrashed()
 * @mixin \Eloquent
 */
	class Motif extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teleconsultation
 *
 * @property string $id
 * @property int $patient_id
 * @property int $creator
 * @property string $type_teleconsultation_id
 * @property string $date_heure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\TypeTeleconsultation|null $type_teleconsultation
 * @method static \Database\Factories\TeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDateHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereTypeTeleconsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withoutTrashed()
 * @mixin \Eloquent
 */
	class RendezVous extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teleconsultation
 *
 * @property string $id
 * @property int $patient_id
 * @property int $creator
 * @property string $type_teleconsultation_id
 * @property string $date_heure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\TypeTeleconsultation|null $type_teleconsultation
 * @method static \Database\Factories\TeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDateHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereTypeTeleconsultationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Teleconsultation withoutTrashed()
 * @mixin \Eloquent
 */
	class Teleconsultation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeTeleconsultation
 *
 * @property string $id
 * @property string $libelle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teleconsultation[] $teleconsultations
 * @property-read int|null $teleconsultations_count
 * @method static \Database\Factories\TypeTeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|TypeTeleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|TypeTeleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|TypeTeleconsultation withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Anamnese[] $anamnese
 * @property-read int|null $anamnese_count
 */
	class TypeAnamnese extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeTeleconsultation
 *
 * @property string $id
 * @property string $libelle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teleconsultation[] $teleconsultations
 * @property-read int|null $teleconsultations_count
 * @method static \Database\Factories\TypeTeleconsultationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation newQuery()
 * @method static \Illuminate\Database\Query\Builder|TypeTeleconsultation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeTeleconsultation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|TypeTeleconsultation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|TypeTeleconsultation withoutTrashed()
 * @mixin \Eloquent
 */
	class TypeTeleconsultation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @mixin \Eloquent
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\Authenticatable, \Illuminate\Contracts\Auth\Access\Authorizable {}
}

