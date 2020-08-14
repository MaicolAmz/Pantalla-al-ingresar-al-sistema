<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];

    public function profsesional()
    {
        return $this->belongsTo('App\Professional');
    }

}
