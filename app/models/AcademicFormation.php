<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicFormation extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'registration_date',
        'senescyt_code',
        'has_titling'
    ];

    public function profsesional()
    {
        return $this->belongsTo('App\Professional');
    }

}
