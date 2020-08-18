<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'trade_name',
        'comercial_activity'
    ];

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }

    public function professionals()
    {
        return $this->belongsToMany('App\Professional')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
