<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description'
    ]; 

    public function profsesional()
    {
        return $this->belongsTo('App\Professional');
    }

}
