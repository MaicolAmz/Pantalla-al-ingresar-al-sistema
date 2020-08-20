<?php

namespace App\Models\JobBoard;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\JoabBoard\Offer;
use App\Models\JoabBoard\Company;
use App\Models\User;
use App\Models\JoabBoard\AcademicFormation;
use App\Models\JoabBoard\Ability;
use App\Models\JoabBoard\Language;
use App\Models\JoabBoard\Course;
use App\Models\JoabBoard\ProfessionalExperience;
use App\Models\JoabBoard\ProfessionalReference;

class Professional extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-job-board';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'about_me'
    ];

    public function offers()
    {
        return $this->belongsToMany(Offer::class)->withTimestamps();
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class)->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function academicFormations()
    {
        return $this->hasMany(AcademicFormation::class);
    }

    public function abilities()
    {
        return $this->hasMany(Ability::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function professionalExperiences()
    {
        return $this->hasMany(ProfessionalExperience::class);
    }

    public function professionalReferences()
    {
        return $this->hasMany(ProfessionalReference::class);
    }


}