<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Speciality
 * @package App
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $name
 * @property string|null $description
 * @property DateTime|null $created_at
 * @property DateTime|null $updated_at
 */
class Speciality extends Model
{
    /**
     * @return BelongsToMany
     */
    public function clinics()
    {
        return $this->belongsToMany(Clinic::class);
    }
}